<?php

require_once '../vendor/autoload.php';

use App\classes\Auth;

if(isset($_POST['btn']))
{
    $auth = new Auth($_POST);
    $message = $auth->login();
    include 'login.php';
}
else if(isset($_GET['status']))
{
    $auth = new Auth();
    $auth->logout();
}