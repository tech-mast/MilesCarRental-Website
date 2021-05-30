<?php

session_start();


require_once 'vendor/autoload.php';
require_once 'lang.php';

use Slim\Http\Request;
use Slim\Http\Response;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler(dirname(__FILE__) . '/logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler(dirname(__FILE__) . '/logs/errors.log', Logger::ERROR));

# database
if (strpos($_SERVER['HTTP_HOST'], "ipd24.ca") !== false) {

} else { 


}


// dabase error handlers
DB::$error_handler = 'db_error_handler'; // runs on mysql query errors
DB::$nonsql_error_handler = 'db_error_handler'; // runs on library errors (bad syntax, etc)

function db_error_handler($params) {
    global $log;
    // log first
    $log->error("Database error: " . $params['error']);
    if (isset($params['query'])) {
        $log->error("SQL query: " . $params['query']);
    }
    // redirect
    header("Location: /internalerror");
    die;
}

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true
]];
$app = new \Slim\App($config);

// Fetch DI Container
$container = $app->getContainer();

// File upload directory
$container['upload_directory'] = __DIR__ . '/uploads';

// Register Twig View helper
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig(dirname(__FILE__) . '/templates', [
        'cache' => dirname(__FILE__) . '/cache',
        'debug' => true, // This line should enable debug mode
    ]);
    // Instantiate and add Slim specific extension
    $router = $c->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));
    return $view;
};

$container['view']->getEnvironment()->addGlobal('userSession', $_SESSION ?? null );

$container['view']->getEnvironment()->addGlobal('loginSession', $_SESSION['Client'] ?? null );

// $container['view']->getEnvironment()->addGlobal('languageSession', $_SESSION['language'] ?? null );

// Attach middleware that verifies only Admin can access /admin... URLs

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

// Function to check string starting 
// with given substring 
function startsWith($string, $startString) 
{ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
} 

$app->add(function (ServerRequestInterface $request, ResponseInterface $response, callable $next) use($mainpage){
    $url = $request->getUri()->getPath();
    if (startsWith($url, "/admin")) {
        if (!isset($_SESSION['Client']) || $_SESSION['Client']['isAdmin'] == 0) { // refuse if user not logged in AS ADMIN
            $response = $response->withStatus(403);
            return $this->view->render($response, 'admin/error_access_denied.html.twig', ['translate' => $mainpage]);
        }
    }
    return $next($request, $response);
});
