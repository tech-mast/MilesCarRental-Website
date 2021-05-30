<?php


require_once 'vendor/autoload.php';
require_once 'init.php';
require_once 'lang.php';

// All templates will be given userSession variable



// FIRST PAGE show forms
$app->get('/rent', function ($request, $response, $args) use($rent, $log,$mainpage) {
    $log->debug("/rent GET handler triggered");
    $tempLocationID = $_SESSION['locationId'];
    $tempEndLocationID = $_SESSION['endLocationId'];
    $_SESSION['carLocation'] = DB::queryFirstRow("SELECT * FROM locations where id='$tempLocationID'");
    $_SESSION['carEndLocation'] = DB::queryFirstRow("SELECT * FROM locations where id='$tempEndLocationID'");
    $initialCars = DB::query("SELECT * FROM vehicles where locationId='$tempLocationID'");
    $cars = array();
    foreach($initialCars as $car){
        $currId = $car['id'];
        $currCheck = DB::queryFirstRow("SELECT dropoffDateTime FROM `rentals` WHERE vehicleId='$currId' ORDER by dropoffDateTime desc LIMIT 1");
        if($currCheck){
            $chkDate = new DateTime($currCheck['dropoffDateTime']);
            $currTime = new DateTime();
            if($chkDate < new DateTime(date("Y/m/d"))){
                $cars[] = $car;
            }
        }else{
            $cars[] = $car;
        }
    }
    $loc = $_SESSION['carLocation'];
    //$cars = DB::query("SELECT * FROM vehicles where locationId='$tempLocationID'");
    $log->debug("all variables ok before rendering rent page");
    return $this->view->render($response, 'rent.html.twig', ['cars' => $cars, 'loc' => $loc, 'messages' => $rent,'translate' => $mainpage]);
});

// STATE 2&3: receiving form submission

$app->post('/rent', function ($request, $response, $args) use($rent, $log,$mainpage) {  
    $log->debug("/rent POST handler triggered");
    //get info from user inputs.selections and set up variables  
    $id = $request->getParam('id');
    $chosenCar = DB::queryFirstRow("SELECT * FROM vehicles where id='$id'");
    //$tempLocationID = $_SESSION['carLocation'];
    //$_SESSION['carLocation'] = DB::queryFirstRow("SELECT * FROM locations where id='$tempLocationID'");
    $extras = DB::query("SELECT * FROM rentalextras");
    $_SESSION['selectedCar'] = $chosenCar;
    $itemsPicked = array();
    $inputsNames = array();
    $inputsArr = array();
    $totalCost = 0;
    $_SESSION['cost'] = 0;
    $exitPage = $request->getParam('exit');
    $hasItem = 0;
    //calculating the rental period
    $startRent = date_create($_SESSION['pickupDate']);
    $endRent = date_create($_SESSION['dropoffDate']);
    $_SESSION['startDateFormatted'] = $startRent->format("Y-m-d");
    $_SESSION['endDateFormatted'] = $endRent->format("Y-m-d");
    $rentDiff = date_diff($startRent, $endRent);
    $_SESSION['rentalPeriod'] = $rentDiff->format('%d');
    if($_SESSION['rentalPeriod'] < 1){
        $_SESSION['rentalPeriod'] = 1;
    }
    //dynamically get the names of checkbox options
    foreach($extras as $extra){
        $inputsNames[] = 'cb' . $extra['id'];
    }
    //retrieve the values of the checkboxes which are same as their database ID
    foreach($inputsNames as $name){
        $inputsArr[] = $request->getParam($name);
    }
    //create empty array based on the number of inputs available
    $retrievedExtras = array_fill(0, count($inputsArr), null);
    //fill array with DB data based on available input options
    for ($i = 0; $i < count($retrievedExtras); $i++){
        $retrievedExtras[$i] = DB::query("SELECT * FROM rentalextras where id='$inputsArr[$i]'");
    }
    //fill array with user chosen options only
    for ($i = 0; $i < count($retrievedExtras); $i++){
        if($inputsArr[$i] > 0){
            $itemsPicked[] = $retrievedExtras[$i];
            foreach($retrievedExtras[$i] as $item){
                $totalCost += $item['cost'];        //update total cost of checkout
            }
        }
    }
    $_SESSION['extrasAdded'] = $itemsPicked;
    $_SESSION['subCost'] = ($chosenCar['dailyCost'] * $_SESSION['rentalPeriod']);
    $_SESSION['subCost'] = number_format($_SESSION['subCost'], 2, '.', '');
    $totalCost += $_SESSION['subCost'];
    $_SESSION['cost'] = number_format($totalCost, 2, '.', '');
    if($itemsPicked){
        $hasItem = 2;
    }
    //if user chose extras go to confirmation page
    if($itemsPicked || $exitPage > 0){
        $log->info("user heading to checkout");
        return $this->view->render($response, "exit_summary.html.twig", 
        ['id' => $id, 'chosenExtras' => $itemsPicked, 'totalCost' => number_format($totalCost, 2, '.', ''), 
        'exit' => $exitPage, 'hasItem' => $hasItem, 'messages' => $rent,'translate' => $mainpage]);
    }else{
        $log->debug("/user heading to rental extras page");
        return $this->view->render($response, "extrasother.html.twig", 
        ['id' => $id, 'car' => $chosenCar, 'extras' => $extras, 'hasItem' => $hasItem, 'messages' => $rent,'translate' => $mainpage]);
    }
    }
);

$app->get('/payment_success', function ($request, $response, $args) use($rent, $log,$mainpage) {
    $log->info("user paid successfully");
    //insert records
    $startRent = date_create($_SESSION['pickupDate']);
    $endRent = date_create($_SESSION['dropoffDate']);
    $rentedCar = $_SESSION['selectedCar'];
    $extras = $_SESSION['extrasAdded'];
    if(isset($_SESSION['Client'])){
        $log->info("logged in user paid");
        $renter = $_SESSION['Client'];
    }else{
        $log->info("guest user paid");
        //guset user if none logged in
        $renter = DB::queryFirstRow("SELECT * FROM customers where id='4'");
    }
    $startLocation = $_SESSION['carLocation'];
    $endLocation = $_SESSION['carEndLocation'];
    //insert rental data
    DB::insert('rentals', ['pickupDateTime' => $startRent, 'dropoffDateTime' => $endRent, 'vehicleId' => $rentedCar['id'],
    'customerId' => $renter['id'], 'pickupLocation' => $startLocation['id'], 'dropoffLocation' => $endLocation['id']]);
    $log->info("first DB insertion successful");
    $newId = DB::queryFirstRow("SELECT * FROM rentals order by id desc limit 1");
    //insert extras data
    foreach($extras as $item){
        foreach($item as $i){
            DB::insert('rentals_rentalextras', ['rentalId' => $newId['id'], 'rentalExtraId' => $i['id']]);
        }
    }
    $log->info("both DB insertions successful");
    return $this->view->render($response, 'payment_success.html.twig', ['messages' => $rent,'translate' => $mainpage]);
});


   

    