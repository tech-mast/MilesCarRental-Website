<?php

$app->get('/session', function ($request, $response, $args) {
    var_dump($_SESSION);
    return $response->write("");
});