<?php

// <!-- AIzaSyBZuHEr7kB6hKrIAyT6PQPA_raaT0jgfG4 -->

require_once 'vendor/autoload.php';
require_once 'init.php';
require_once 'lang.php';


use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function ($request, $response, $args) use($mainpage){ 
    $locations = DB::query("SELECT COUNT(v.id) AS count,l.address, l.lat, l.lng FROM vehicles as v RIGHT JOIN locations as l on v.locationId = l.id GROUP BY locationId");
    $vehiclesAvailable = DB::query("SELECT locationId, COUNT(*) AS count FROM vehicles GROUP BY locationId");
    return $this->view->render($response, 'mainpage.html.twig', ['locationList' => $locations, 'vehiclesCount' => $vehiclesAvailable, 'translate' => $mainpage]);
});

$app->get('/fr', function ($request, $response, $args) use($mainpage){
    $locations = DB::query("SELECT COUNT(v.id) AS count,l.address, l.lat, l.lng FROM vehicles as v RIGHT JOIN locations as l on v.locationId = l.id GROUP BY locationId");
    $vehiclesAvailable = DB::query("SELECT locationId, COUNT(*) AS count FROM vehicles GROUP BY locationId");
    return $this->view->render($response, 'mainpage.html.twig', ['locationList' => $locations, 'vehiclesCount' => $vehiclesAvailable, 'translate' => $mainpage]);
});

$app->get('/swithlanguage/fr', function ($request, $response, $args) use($mainpage) {
    $_SESSION['language'] = 'FR';
    header("Refresh:0; url=/fr");
    $locations = DB::query("SELECT COUNT(v.id) AS count,l.address, l.lat, l.lng FROM vehicles as v RIGHT JOIN locations as l on v.locationId = l.id GROUP BY locationId");
    $vehiclesAvailable = DB::query("SELECT locationId, COUNT(*) AS count FROM vehicles GROUP BY locationId");

    // $refs = $request->getHeader("HTTP_REFERER");
    // print_r($refs);
    // $backlink = $refs[0];

    // return $response->withRedirect($backlink);

    return $this->view->render($response, 'mainpage.html.twig', ['locationList' => $locations, 'vehiclesCount' => $vehiclesAvailable, 'translate' => $mainpage]);
});

$app->get('/swithlanguage/en', function ($request, $response, $args) use($mainpage) {
    $_SESSION['language'] = 'EN';
    header("Refresh:0; url=/fr");
    $locations = DB::query("SELECT COUNT(v.id) AS count,l.address, l.lat, l.lng FROM vehicles as v RIGHT JOIN locations as l on v.locationId = l.id GROUP BY locationId");
    $vehiclesAvailable = DB::query("SELECT locationId, COUNT(*) AS count FROM vehicles GROUP BY locationId");

    // $refs = $request->getHeader("HTTP_REFERER");
    // print_r($refs);
    // $backlink = $refs[0];

    // return $response->withRedirect($backlink);

    return $this->view->render($response, 'mainpage.html.twig', ['locationList' => $locations, 'vehiclesCount' => $vehiclesAvailable, 'translate' => $mainpage]);
});

$app->post('/fr', function (Request $request, Response $response, $args) use($mainpage) {
    $_SESSION['language'] = 'FR';
    $locations = DB::query("SELECT COUNT(v.id) AS count,l.address, l.lat, l.lng FROM vehicles as v RIGHT JOIN locations as l on v.locationId = l.id GROUP BY locationId");

    $location = $request->getParam('locations');
    $dropofflocation = $request->getParam('dropoffLocations');
    $pickupDate = $request->getParam('PickupDate');
    $dropoffDate = $request->getParam('DropoffDate');
    
    $locatonId =  DB::queryFirstRow("SELECT id FROM locations WHERE address = %s", $location);
    $dropofflocationId =  DB::queryFirstRow("SELECT id FROM locations WHERE address =%s", $dropofflocation);

    $errorList = array();

    if(!$location){
        $errorList [] = "pickup Location could not be empty";
    }
    if(!$dropofflocation){
        $errorList [] = "dropoff Location could not be empty";
    }
    if(!$pickupDate){
        $errorList [] = "pickupDate could not be empty";
    } 
    else if($pickupDate < date("Y-m-d H:i:s")){
        $errorList [] = "Pickup Date must be later than current Time";
        $pickupDate ="";
    }
    $B = strtotime($dropoffDate);
    $C = strtotime($pickupDate);
    if(!$dropoffDate){
        $errorList [] = "dropoffDate could not be empty";
    }
    else if($B < $C){
        $errorList [] = "dropoff Date must be later than pickup Date";
        $dropoffDate ="";
    }

    if($errorList){
        return $this->view->render($response, 'mainpage.html.twig', ['locationList' => $locations,'location' => $location, 'dropoffLocation' => $dropofflocation, 'pickupDate' => $pickupDate,'dropoffDate' => $dropoffDate, 'errorList' => $errorList, 'translate' => $mainpage]);
    }
    else{
        $_SESSION['locationId'] = $locatonId['id'];
        $_SESSION['endLocationId'] = $dropofflocationId['id'];
        $_SESSION['pickupDate'] = $pickupDate;
        $_SESSION['dropoffDate'] = $dropoffDate;
        return $response->withRedirect("http://milescarrental.ipd24.ca/rent");   
    }
});


$app->post('/', function (Request $request, Response $response, $args) use($mainpage) {
   
    $locations = DB::query("SELECT COUNT(v.id) AS count,l.address, l.lat, l.lng FROM vehicles as v RIGHT JOIN locations as l on v.locationId = l.id GROUP BY locationId");

    $location = $request->getParam('locations');
    $dropofflocation = $request->getParam('dropoffLocations');
    $pickupDate = $request->getParam('PickupDate');
    $dropoffDate = $request->getParam('DropoffDate');
    
    $locatonId =  DB::queryFirstRow("SELECT id FROM locations WHERE address = %s", $location);
    $dropofflocationId =  DB::queryFirstRow("SELECT id FROM locations WHERE address =%s", $dropofflocation);

    $errorList = array();

    if(!$location){
        $errorList [] = "pickup Location could not be empty";
    }
    if(!$dropofflocation){
        $errorList [] = "dropoff Location could not be empty";
    }
    if(!$pickupDate){
        $errorList [] = "pickupDate could not be empty";
    } 
    else if($pickupDate < date("Y-m-d H:i:s")){
        $errorList [] = "Pickup Date must be later than current Time";
        $pickupDate ="";
    }
    $B = strtotime($dropoffDate);
    $C = strtotime($pickupDate);
    if(!$dropoffDate){
        $errorList [] = "dropoffDate could not be empty";
    }
    else if($B < $C){
        $errorList [] = "dropoff Date must be later than pickup Date";
        $dropoffDate ="";
    }

    if($errorList){
        return $this->view->render($response, 'mainpage.html.twig', ['locationList' => $locations,'location' => $location, 'dropoffLocation' => $dropofflocation, 'pickupDate' => $pickupDate,'dropoffDate' => $dropoffDate, 'errorList' => $errorList, 'translate' => $mainpage]);
    }
    else{
        $_SESSION['locationId'] = $locatonId['id'];
        $_SESSION['endLocationId'] = $dropofflocationId['id'];
        $_SESSION['pickupDate'] = $pickupDate;
        $_SESSION['dropoffDate'] = $dropoffDate;
        return $response->withRedirect("http://milescarrental.ipd24.ca/rent");   
    }
});

