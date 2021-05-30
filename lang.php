<?php

    if(isset($_SESSION['language'])){
        if($_SESSION['language']=='FR'){
            require('lang/fr.php');
        }else{
            require('lang/en.php');
        }
    }else{
        require('lang/en.php');
    }
