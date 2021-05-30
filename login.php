<?php

require_once 'vendor/autoload.php';
require_once 'lang.php';
require_once 'init.php';

use Slim\Http\Request;
use Slim\Http\Response;

// STATE 1: first display of the form
$app->get('/login', function ($request, $response, $args) use ($login,$mainpage){    
    //global $login;
    return $this->view->render($response, 'login.html.twig', ['messages'=>$login,'translate' => $mainpage]);
});

$app->get('/newpassword', function ($request, $response, $args) use ($login,$mainpage){    
    //global $login;
    return $this->view->render($response, 'newpassword.html.twig', ['messages'=>$login,'translate' => $mainpage]);
});

$app->post('/newpassword', function (Request $request, Response $response, $args) {    
    global $login, $log,$mainpage;
    $password = $request->getParam('password');
    $password2 = $request->getParam('password2');
    $log->debug(sprintf("New password: %s", $password));
    $log->debug(sprintf("New password2: %s", $password2));
    if(isset($_SESSION['Client']) && $password===$password2){
        $log->debug(sprintf("New passwords are verified ."));
        $password = password_hash($password, PASSWORD_BCRYPT);
        DB::query("UPDATE customers SET password=%s WHERE email=%s", $password, $_SESSION['Client']['email']);
        //$counter = DB::affectedRows();
        unset($_SESSION['Client']);
        return $response->withRedirect("/login");  
    }else{
        $log->info(sprintf("new password request is failed from %s on %s\n", $_SERVER['REMOTE_ADDR'], date('Y-m-d H:i:s')));
        $errorList = [];
        $errorList[] = $login['pass2'];
        return $this->view->render($response, "newpassword.html.twig", ['errorList' => $errorList, 'messages'=>$login,'translate' => $mainpage]);
    }

});

// STATE 2&3: receiving form submission
$app->post('/login', function (Request $request, Response $response, $args) {    
    global $login, $log,$mainpage;
    $email = $request->getParam('email');
    $password = $request->getParam('password');

    //var_dump($errorList);
    $valuesList = ['email' => $email, 'password' => $password];

    $user = DB::queryFirstRow("SELECT * FROM customers WHERE email=%s", $email);

    if(password_verify($password, $user['password'])){  
        unset($user['password']);
        $_SESSION['Client'] = $user;
        $log->debug(sprintf("Session Check in Admin: %s, %s, %s\n", $_SESSION['Client']['id'], $_SESSION['Client']['isAdmin'], $_SESSION['Client']['firstName']));
        $log->debug(sprintf("Login successful for email %s, from %s on %s\n", $email, $_SERVER['REMOTE_ADDR'], date('Y-m-d H:i:s')));
        $log->debug(sprintf("Driver Lisence: %s\n",$user['driversLiscenceNum']));
        if($password == $user['driversLiscenceNum']){
            $log->debug(sprintf("A redirect to new password page happens."));
            return $response->withRedirect("/newpassword");  
        }
        $errorList = [];
        // back to last page but to / for login/logout/register
        $refs = $request->getHeader("HTTP_REFERER");
        $backlink = $refs[0];
        if(strpos($backlink,'/login')===false 
            && strpos($backlink,'/register')===false  
            && strpos($backlink,'/logout')===false 
            && strpos($backlink,'/newpassword')===false ) {
            return $response->withRedirect($backlink); 
        }else{
            return $response->withRedirect("/");  
        }
    }
    else{
        unset($_SESSION['Client']);
        $log->info(sprintf("Login failed for email %s from %s on %s\n", $email, $_SERVER['REMOTE_ADDR'], date('Y-m-d H:i:s')));
        $errorList = [];
        $errorList[] = $login['fail'];
        return $this->view->render($response, "login.html.twig", ['errorList' => $errorList, 'messages'=>$login,'translate' => $mainpage]);
    }
});
