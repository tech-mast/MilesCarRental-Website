<?php
// <!-- Your username for this account is: cp5003
// Your password for this account is: 8kaa8hqu -->

require_once 'vendor/autoload.php';
require_once 'init.php';
require_once 'lang.php';
use Slim\Http\UploadedFile;

// display ADMIN index page


$app->get('/admin', function ($request, $response, $args) use($mainpage) {

    global $admin, $error, $log;
    $log->debug(sprintf("Session Check in Admin: %s, %s\n", $_SESSION['Client']['id'], $_SESSION['Client']['isAdmin']));
    if(isset($_SESSION['Client'])){
        if($_SESSION['Client']['isAdmin']==1){
            $modelCountList = DB::query("SELECT COUNT(id) as count, model FROM `vehicles` GROUP by model");
            $vehiclesCount = DB::query("SELECT COUNT(v.id) AS count,l.address FROM vehicles as v RIGHT JOIN locations as l on v.locationId = l.id GROUP BY locationId");
            // return $this->view->render($response, 'admin/index.html.twig', ['usersList' => $usersList]);
            return $this->view->render($response, 'admin/index.html.twig', ['modelCuontList' => $modelCountList, 'vehiclesCount' =>$vehiclesCount, 'translate' => $mainpage]);
        } else{
            $log->info(sprintf("Unauthorised access to admin/users by uid %d from %s on %s\n", $_SESSION['Client']['uid'], $_SERVER['REMOTE_ADDR'], date('Y-m-d H:i:s')));
            return $this->view->render($response, 'error_access_denied.html.twig', ['messages'=>$error, 'translate' => $mainpage]);
        }
    }else{
        // var_dump($_SESSION['Client']);
        return $response->withRedirect("/login");  
    }

});

//display cars list

$app->get('/admin/cars', function ($request, $response, $args) use($mainpage) {
    $carsList = DB::query("SELECT v.id, v.model, v.size, v.mileagePerLitre, v.seats,v.doors, v.dailyCost, l.address,l.phone FROM vehicles as v LEFT JOIN locations as l on v.locationId = l.id");
    // $carsList = DB::query("SELECT * FROM vehicles as v LEFT JOIN locations as l on v.locationId = l.id LEFT JOIN rentals as r on l.id = r.vehicleId LEFT JOIN rentals_rentalextras on r.id = rentals_rentalextras.rentalId LEFT JOIN rentalextras on rentalextras.id = rentals_rentalextras.rentalExtraId");
    return $this->view->render($response, 'admin/cars_list.html.twig', ['carsList' => $carsList, 'translate' => $mainpage]);
});

// edit/add car
// STATE 1: first display
$app->get('/admin/cars/{op:edit|add}[/{id:[0-9]+}]', function ($request, $response, $args) use($mainpage){
    // either op is add and id is not given OR op is edit and id must be given
    if ( ($args['op'] == 'add' && !empty($args['id'])) || ($args['op'] == 'edit' && empty($args['id'])) ) {
        $response = $response->withStatus(404);
        return $this->view->render($response, 'admin/not_found.html.twig',['translate' => $mainpage]);
    }
    $locations = DB::query("SELECT l.address, l.id FROM locations as l");
    if ($args['op'] == 'edit') {
        $car = DB::queryFirstRow("SELECT v.*, l.address FROM vehicles as v LEFT JOIN locations as l on v.locationId = l.id WHERE v.id=%d", $args['id']);
        if (!$car) {
            $response = $response->withStatus(404);
            return $this->view->render($response, 'admin/not_found.html.twig',['translate' => $mainpage]);
        }
    } else {
        $car = [];
    }
    return $this->view->render($response, 'admin/cars_addedit.html.twig', ['c' => $car,'locations' => $locations, 'op' => $args['op'], 'translate' => $mainpage]);
});

// STATE 2&3: receiving submission
$app->post('/admin/cars/{op:edit|add}[/{id:[0-9]+}]', function ($request, $response, $args) use($mainpage){
    $op = $args['op'];
    // either op is add and id is not given OR op is edit and id must be given
    if ( ($op == 'add' && !empty($args['id'])) || ($op == 'edit' && empty($args['id'])) ) {
        $response = $response->withStatus(404);
        return $this->view->render($response, 'admin/not_found.html.twig', ['translate' => $mainpage]);
    }

    $locations = DB::query("SELECT l.address, l.id FROM locations as l");

    if ($op == 'edit') {
        $car = DB::queryFirstRow("SELECT v.*, l.address FROM vehicles as v LEFT JOIN locations as l on v.locationId = l.id WHERE v.id=%d", $args['id']);
    }
   
    $model = $request->getParam('model');
    // $isAdmin = $request->getParam('isAdmin') ?? '0';
    $size = $request->getParam('size');
    $mileagePerLitre = $request->getParam('mileagePerLitre');
    $seats = $request->getParam('seats');
    $doors = $request->getParam('doors');
    $dailyCost = $request->getParam('dailyCost');
    $locationId = $request->getParam('inputAddress');
  
   
    $errorList = array();

    if(strlen($model) <2 || strlen($model) >100){
        $model ="";
        $errorList[]="Model must be 2-100 characters long";// append to array
    }

    // verify image
    if ($op == 'edit') {
        if($car['imageData']){
            $photoData = $car['imageData'];
            $mimeType = $car['imageMimeType'];
            $uploadedImagePath = $car['imagePath'];
        }
        else{
            $photoData = "";
            $mimeType = "";
            $uploadedImagePath = "";
        }
    }

    $hasPhoto = false;
    $mimeType = "";
    $uploadedImage = $request->getUploadedFiles()['image']?? null;
    if($uploadedImage){
    if ($uploadedImage->getError() != UPLOAD_ERR_NO_FILE) { // was anything uploaded?
        // print_r($uploadedImage->getError());
        $hasPhoto = true;
        $result = verifyUploadedPhoto($uploadedImage, $mimeType);
        if ($result !== TRUE) {
            $errorList[] = $result;
        } 
    }

    $photoData = null;
    if ($hasPhoto) {
        $photoData = file_get_contents($uploadedImage->file);
        $directory = $this->get('upload_directory');
        $uploadedImagePath = moveUploadedFile($directory, $uploadedImage);

    }
}
    $valuesList = ['model' => $model,'size' => $size,'imageData' => $photoData, 'mileagePerLitre' => $mileagePerLitre, 'seats' => $seats, 'doors' => $doors,'dailyCost' => $dailyCost, 'locationId' =>$locationId,'id' => $args['id']??""];
    //
    if ($errorList) {
        return $this->view->render($response, 'admin/cars_addedit.html.twig',
                [ 'errorList' => $errorList, 'c' =>$valuesList, 'locations' =>$locations, 'op' => $op, 'translate' => $mainpage]);
    } else {
        if ($op == 'add') {
            DB::insert('vehicles', ['model' => $model,'size' => $size,'imageData' => $photoData, 'mileagePerLitre' => $mileagePerLitre, 'seats' => $seats, 'doors' => $doors,'dailyCost' => $dailyCost, 'locationId' => $locationId,'imageMimeType' => $mimeType, 'imagePath' => $uploadedImagePath ?? ""]);
            return $this->view->render($response, 'admin/cars_addedit_success.html.twig', ['op' => $op, 'translate' => $mainpage ]);
            
        } else {
            $data = ['model' => $model,'size' => $size,'imageData' => $photoData, 'mileagePerLitre' => $mileagePerLitre, 'seats' => $seats, 'doors' => $doors,'dailyCost' => $dailyCost, 'locationId' => $locationId,'imageMimeType' => $mimeType, 'imagePath' => $uploadedImagePath];
            DB::update('vehicles', $data, "id=%d", $args['id']);
            return $this->view->render($response, 'admin/cars_addedit_success.html.twig', ['op' => $op , 'translate' => $mainpage]);
        }
    }
});

// returns TRUE on success
// returns a string with error message on failure
function verifyUploadedPhoto($photo, &$mime = null) {
    if ($photo->getError() != 0) {
        return "Error uploading photo " . $photo->getError();
    } 
    if ($photo->getSize() > 1024*1024) { // 1MB
        return "File too big. 1MB max is allowed.";
    }
    $info = getimagesize($photo->file);
    if (!$info) {
        return "File is not an image";
    }
    // echo "\n\nimage info\n";
    // print_r($info);
    if ($info[0] < 200 || $info[0] > 1000 || $info[1] < 200 || $info[1] > 1000) {
        return "Width and height must be within 200-1000 pixels range";
    }
    $ext = "";
    switch ($info['mime']) {
        case 'image/jpeg': $ext = "jpg"; break;
        case 'image/gif': $ext = "gif"; break;
        case 'image/png': $ext = "png"; break;
        default:
            return "Only JPG, GIF and PNG file types are allowed";
    } 
    if (!is_null($mime)) {
        $mime = $info['mime'];
    }
    return TRUE;
}

function moveUploadedFile($directory, UploadedFile $uploadedFile)
{
    $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
    $basename = bin2hex(random_bytes(8)); // see http://php.net/manual/en/function.random-bytes.php
    $filename = sprintf('%s.%0.8s', $basename, $extension);
    $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);

    return $filename;
}


$app->get('/displaycars/image/{id:[0-9]+}', function ($request, $response, $args) {
    /* // OPTIONAL - depending on security levels
    if (!isset($_SESSION['user'])) { // refuse if user not logged in
        $response = $response->withStatus(403);
        return $this->view->render($response, 'error_access_denied.html.twig');
    } */
    $pic = DB::queryFirstRow("SELECT imageData,imageMimeType FROM vehicles WHERE id=%d AND imageData IS NOT NULL", $args['id']);
    if (!$pic) { // not found - FIXME
        return $response->withStatus(404);
    }
    $response->getBody()->write($pic['imageData']);
    return $response->withHeader('Content-type', $pic['imageMimeType']);
});

//delete function
// STATE 1: first display
$app->get('/admin/cars/delete/{id:[0-9]+}', function ($request, $response, $args) use($mainpage){
    $car = DB::queryFirstRow("SELECT v.*, l.address FROM vehicles as v LEFT JOIN locations as l on v.locationId = l.id WHERE v.id=%d", $args['id']);
    if (!$car) {
        $response = $response->withStatus(404);
        return $this->view->render($response, 'admin/not_found.html.twig');
    }
    return $this->view->render($response, 'admin/cars_delete.html.twig', ['c' => $car, 'translate' => $mainpage] );
});

// STATE 1: first display
$app->post('/admin/cars/delete/{id:[0-9]+}', function ($request, $response, $args) use($mainpage){
    DB::delete('vehicles', "id=%d", $args['id']);
    return $this->view->render($response, 'admin/cars_delete_success.html.twig' ,['translate' => $mainpage]);
});


$app->get('/admin/test', function ($request, $response, $args) use($mainpage){
    return $this->view->render($response, 'admin/not_found.html.twig',['translate' => $mainpage]);
});
