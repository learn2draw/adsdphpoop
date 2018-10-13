<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

    require_once "./core/database/connection.php";

    //var_dump($app['database']);
    $fname = $_POST["playerfname"];
    $lname = $_POST["playerlname"];
    $email = $_POST["playeremail"];
    $mobile = $_POST["playerphone"];
    $password = $_POST["playerpass"];
    $pwcheck = $_POST["playerpassconfirm"];
    $pwhint = $_POST["playerpasshint"];


    if( $password === $pwcheck){//check if passwords are equal
        $hashedpw = hash('sha256', $password);//hash the password 
        
        //$app['database']->addNewUser($fname, $lname, $email, $mobile, $hashedpw, $pwhint); // insert all the values into the database
        $UQB = new UserQueryBuilder();
        $UQB->addNewUser($fname, $lname, $email, $mobile, $hashedpw, $pwhint); // insert all the values into the database


         echo "<script type=\"text/javascript\">".
        "alert('User toegevoegd');".
        "</script>"; // notify that the user is added.
        
        echo " <meta http-equiv='refresh' content='0;url=home'>"; // redirect the user to the homepage
    }