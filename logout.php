<?php
session_start();
session_destroy();
header('location: login.php');
exit();
?>
<html>
<head>
    <title>Logout</title>
</head>
<body>
</body>
</html>

