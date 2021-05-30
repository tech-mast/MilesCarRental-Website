<?php

// for development we want to see all the errors, some php.ini versions disable those (e.g. MAMP)
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once 'vendor/autoload.php';

require_once 'init.php';

require_once 'mainpage.php';

require_once 'rental.php';

require_once 'register.php';

require_once 'login.php';

require_once 'logout.php';

require_once 'profile.php';

require_once 'users.php';

require_once 'admin.php';

require_once 'internalerror.php';

require_once 'accessdenied.php';

//for debug
//require_once 'debug.php';

// Run app
$app->run();
