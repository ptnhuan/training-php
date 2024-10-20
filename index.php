<?php
require_once "helper/Helper.php";
$helper = new Helper();

if ($helper->isAuth()) {
    header('location: list_users.php');
} else {
    header('location: login.php');
}