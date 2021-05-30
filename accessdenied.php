<?php

require_once 'vendor/autoload.php';
require_once 'lang.php';

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/accessdenied', function ($request, $response, $args) {
    return $this->view->render($response, 'error_access_denied.html.twig');
});
