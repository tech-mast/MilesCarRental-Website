<?php

require_once 'vendor/autoload.php';
require_once 'lang.php';

use Slim\Http\Request;
use Slim\Http\Response;

// STATE 1: first display of the form
$app->get('/register', function ($request, $response, $args) {   
    global $register,$mainpage; 
    return $this->view->render($response, 'register.html.twig', ['messages'=>$register,'translate' => $mainpage]);
});

// STATE 2&3: receiving form submission
$app->post('/register', function (/*Request*/ $request, /*Response*/ $response, $args) {    
    global $register,$mainpage;
    $firstname = $request->getParam('firstname');
    $lastname = $request->getParam('lastname');
    $phone = $request->getParam('phone');
    $birth = $request->getParam('birth');
    $company = $request->getParam('company');
    $mailinglist = ($request->getParam('mailinglist') == 'yes'?1:0);
    $email = $request->getParam('email');
    $password = password_hash($request->getParam('password'), PASSWORD_BCRYPT);
    $license = $request->getParam('license');

    // validation
    $errorList = [];
    checkName($firstname, $errorList);
    checkName($lastname, $errorList);
    checkPhone($phone, $errorList);
    checkBirth($birth, $errorList);
    checkEmail($email, $errorList);
    //var_dump($errorList);
    $valuesList = ['firstname' => $firstname, 'lastname' => $lastname, 'phonenumber' => $phone, 
                   'dateofbirth' => $birth,  'companyname' => $company, 'email' => $email,
                   'password'=>$password,'driversliscencenum' => $license, 'mailinglist' => $mailinglist, 'isadmin' => 0];
    //var_dump($valuesList);
    if ($errorList) { // STATE 2: errors - show and redisplay the form
        unset($valuesList['password']);
        return $this->view->render($response, "register.html.twig", ['errorList' => $errorList, 'v' => $valuesList, 'messages'=>$register,'translate' => $mainpage]);
    } else { // STATE 3: success
        DB::insert('customers', $valuesList);
        //FIXME: what if insert failed?!
        return $response->withRedirect("/login"); 
    }
});

function checkName($name, &$errorList){
    global $register; 
    $checkResult = true;
    if (strlen($name) < 2 || strlen($name) > 100) {
        $errorList[] = $register['errname']; // append to array
        $checkResult = false;
    }
    return $checkResult;
}

function checkPhone($phone, &$errorList){
    global $register; 
    $checkResult = true;
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $errorList[] = $register['errphone']; // append to array
        $checkResult = false;
    }
    return $checkResult;
}

function checkBirth($birth, &$errorList){
    global $register; 
    $checkResult = true;
    $date = DateTime::createFromFormat('Y-m-d', $birth);
    if ($date == false) {
        $errorList[] = $register['errbirth']; // append to array
        $checkResult = false;
    }
    return $checkResult;
}

function checkEmail($email, &$errorList){
    global $register; 
    $checkResult = true;
    if (!preg_match("/^[A-Za-z0-9_\.]+@[A-Za-z0-9]+\.[A-Za-z]{2,}$/", $email)) {
        $errorList[] = $register['erremail']; // append to array
        $checkResult = false;
    }
    return $checkResult;
}
