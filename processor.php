<?php

// require 'loader/autoloader.php';
require 'functions.php';
 if (isset($_GET['action'])) {
     switch ($_GET['action']) {
        case 'update':
            extract($_POST);
            // extract($_POST);
            updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard, $tdate, $confirm, $pay);

            break;
        
        case 'confirm':
            extract($_POST);
            // extract($_POST);
            confirmuser($id, $confirm);

            break;
        
        case 'show':
            extract($_POST);
            // extract($_POST);
            show($cert);

            break;
        
        case 'showquiz':
            extract($_POST);
            // extract($_POST);
            showquiz($quiz);

            break;

        case 'showdisquiz':
            extract($_POST);
            // extract($_POST);
            showdisquiz($disquiz, $district);

            break;
        case 'food':
            extract($_POST);
            // extract($_POST);
            foodstats($district);

            break;

        case 'showdiscert':
            extract($_POST);
            // extract($_POST);
            showdiscert($discert, $district);

            break;

        case 'settdate':
            extract($_POST);
            // extract($_POST);
            settdate($tdate, $district);

            break;
        

        case 'login':
            extract($_POST);
            login($email, $password);
            break;

        case 'register':
            extract($_POST);
            $name = $fname.' '.$lname;
            if ($password != $repass) {
                echo 'Password do not match';
            } elseif ($fname == '' || $lname == '' || $email == '' || $password == '') {
                echo ' All field must be filled';
            } else {
                register($name, $email, $password);
            }
            break;

        case 'changepass':

            extract($_POST);
            if ($newpass != $repass) {
                echo 'Password do not match';
            } else {
                changepass($id, $password, $newpass);
            }
                break;

        case 'pay':
            extract($_POST);
            pay($id);
            break;

        default:

        break;
    }
 }
