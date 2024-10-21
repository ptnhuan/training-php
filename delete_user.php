<?php

require_once "helper/Helper.php";
$helper = new Helper();

if (!$helper->isAuth()) {
    header('location: login.php');
    exit();
}

require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $userModel->deleteUserById($id);//Delete existing user
}
header('location: list_users.php');
exit();
?>
<html>
<head>
    <title>Delete user</title>
</head>
<body>
</body>
</html>


