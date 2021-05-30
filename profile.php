<?php

require_once 'vendor/autoload.php';
require_once 'lang.php';

use Slim\Http\Request;
use Slim\Http\Response;

// STATE 1: first display of the form
$app->get('/editprofile', function ($request, $response, $args) {   
    global $register,$mainpage; 
    if(isset($_SESSION['Client'])){
        return $this->view->render($response, 'profile.html.twig', ['messages'=>$register, 'v'=>$_SESSION['Client'],'translate' => $mainpage]);
    }else{
        return $response->withRedirect("/login"); 
    }
});

$app->get('/listprofile', function ($request, $response, $args) {   
    global $register,$mainpage; 
    if(isset($_SESSION['Client'])){
        return $this->view->render($response, 'listprofile.html.twig', ['messages'=>$register, 'v'=>$_SESSION['Client'],'translate' => $mainpage]);
    }else{
        return $response->withRedirect("/login"); 
    }
});

// STATE 2&3: receiving form submission
$app->post('/editprofile', function (/*Request*/ $request, /*Response*/ $response, $args) {    
    global $register,$mainpage;
    $firstname = $request->getParam('firstname');
    $lastname = $request->getParam('lastname');
    $phone = $request->getParam('phone');
    $company = $request->getParam('company');
    $email = $request->getParam('email');
    $license = $request->getParam('license');

    // validation
    $errorList = [];
    checkName($firstname, $errorList);
    checkName($lastname, $errorList);
    checkPhone($phone, $errorList);
    checkEmail($email, $errorList);

    //var_dump($errorList);
    $valuesList = ['firstname' => $firstname, 'lastname' => $lastname, 'phonenumber' => $phone, 
                   'companyname' => $company, 'email' => $email, 'driversliscencenum' => $license];
    //var_dump($valuesList);
    if(!isset($_SESSION['Client'])){
        return $response->withRedirect("/login"); 
    }else if ($errorList) { // STATE 2: errors - show and redisplay the form
        return $this->view->render($response, "profile.html.twig", ['errorList' => $errorList, 'v' => $valuesList, 'messages'=>$register,'translate' => $mainpage]);
    }else { // STATE 3: success
        DB::query("UPDATE customers SET firstname=%s, lastname=%s, phonenumber=%s, companyname=%s, email=%s, driversliscencenum=%s WHERE id=%d", $firstname, $lastname, $phone, $company, $email, $license, $_SESSION['Client']['id']);
        //$counter = DB::affectedRows();
        $user = DB::queryFirstRow("SELECT * FROM customers WHERE email=%s", $email);
        unset($user['password']);
        $_SESSION['Client'] = $user;
        return $response->withRedirect("/listprofile"); 
    }
});
