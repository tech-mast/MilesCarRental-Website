<?php

require_once 'vendor/autoload.php';
require_once 'lang.php';

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/admin/users', function ($request, $response, $args) {    
    global $admin, $error, $log, $records,$mainpage;
    if(isset($_SESSION['Client'])){
        if($_SESSION['Client']['isAdmin']==1){
            $userList = DB::query("SELECT * FROM customers");
            foreach($userList as &$u){
                $u['DateOfBirth'] = date_format(date_create($u['DateOfBirth']), 'Y-m-d');
            }
            return $this->view->render($response, 'admin/users.html.twig', ['messages'=>$admin, 'userList'=>$userList,'translate' => $mainpage,'adminid'=>$_SESSION['Client']['id']]);
        } else{
            $log->info(sprintf("Unauthorised access to admin/users by uid %d from %s on %s\n", $_SESSION['Client']['uid'], $_SERVER['REMOTE_ADDR'], date('Y-m-d H:i:s')));
            return $this->view->render($response, 'admin/error_access_denied.html.twig', ['messages'=>$error,'translate' => $mainpage]);
        }
    }else{
        return $response->withRedirect("/login");  
    }
});

$app->post('/admin/users/{op:grant|reset|add}[/{id:[0-9]+}]', function (Request $request, Response $response, $args) {    
    global $admin, $log,$mainpage;
    $op = $args['op'];
    if ( ($op == 'add' && !empty($args['id'])) || ($op != 'add' && empty($args['id'])) ) {
        $response = $response->withStatus(404);
        return $this->view->render($response, 'admin/error_not_found.html.twig',['translate' => $mainpage]);
    }
    $json = $request->getBody();
    $item = json_decode($json, TRUE);// true makes it return an associative array instead of an object
    if($op=='add'){
        // if(isset($item['isadmin'])){
        //     $item['isadmin'] = ($item['isadmin'] == 'yes'?1:0);
        // }else{
        //     $item['isadmin'] = 0;
        // }
        $item['password'] = password_hash($item['password'], PASSWORD_BCRYPT);
        // validation
        $errorList = [];
        checkName($item['firstname'], $errorList);
        checkName($item['lastname'], $errorList);
        checkPhone($item['phonenumber'], $errorList);
        checkBirth($item['dateofbirth'], $errorList);
        checkEmail($item['email'], $errorList);
        if ($errorList) { // STATE 2: errors - show and redisplay the form
            unset($item['password']);
            $response = $response->withStatus(400);
            $response->getBody()->write(json_encode($errorList[0]));
            $log->debug(sprintf("Add Error: %s\n", $errorList[0]));
            return $response;
        } else{
            DB::insert('customers', $item);
            $insertId = DB::insertId();
            $log->debug("Record users added id=" . $insertId);
            // $counter = DB::affectedRows();
            // $result = $counter==1?true:false;
            $response = $response->withStatus(201);
            $response->getBody()->write(json_encode($insertId));
            return $response;
        }
    }else if($op=='grant'){
        $uid = $args['id'];
        if($uid==$_SESSION['Client']['id']){
            $response = $response->withStatus(400);
            $response->getBody()->write(json_encode("User cannot performe self-grant or self-degrant"));
            $log->debug(sprintf("Grant Error: User %d tried to grant %s\n", $uid, $uid));
        }else{
            $isadmin = ($item['isadmin'] == 'yes'?1:0);
            DB::query("UPDATE customers SET isadmin=%s WHERE id=%d", $isadmin, $uid);
            $counter = DB::affectedRows();
            $result = $counter==1?true:false;
            $response->getBody()->write(json_encode($result));
            return $response;
        }
    }else if($op=='reset'){
        $uid = $args['id'];
        $password = password_hash($item['password'], PASSWORD_BCRYPT);
        DB::query("UPDATE customers SET password=%s WHERE id=%d", $password, $uid);
        $counter = DB::affectedRows();
        $result = $counter==1?true:false;
        $response->getBody()->write(json_encode($result));
        return $response;
    }
});
