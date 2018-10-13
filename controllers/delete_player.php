<?php
/**
 * Created by PhpStorm.
 * User: whitepanda
 * Date: 12/10/2018
 * Time: 10:28
 */



$UQB = new UserQueryBuilder();
$UQB->DeleteUserByID($_POST['user_id']);


echo "<script type=\"text/javascript\">".
    "alert('User verwijderd');".
    "</script>"; // notify that the user is added.

header("location: home");