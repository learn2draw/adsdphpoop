<?php
/**
 * Created by PhpStorm.
 * User: whitepanda
 * Date: 03/10/2018
 * Time: 15:36
 */

$UQB = new UserQueryBuilder();

if(isset($_POST) && isset($_POST["email"]) && isset ($_POST["pass"])){
    $userData =  $UQB->GetUserByEmailAndPassword($_POST["email"],$_POST["pass"]);
}


require 'views/login.view.php';



