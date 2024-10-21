<?php

require_once "helper/Helper.php";
$helper = new Helper();

if ($helper->isAuth()) {
    session_destroy();
    header('location: login.php');
    exit();
} else {
    header('location: list_users.php');
    exit();
}