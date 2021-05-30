<?php

require_once 'vendor/autoload.php';

use Slim\Http\Request;
use Slim\Http\Response;

// STATE 1: unset, change status and redirect

$app->get('/logout', function ($request, $response, $args) use ($log) { 
    //global $log;
    $log->debug(sprintf("Logout successful for uid=%d, from %s", @$_SESSION['Client']['id'], $_SERVER['REMOTE_ADDR']));   
    unset($_SESSION['Client']);
    return $response->withRedirect("/");  
});
