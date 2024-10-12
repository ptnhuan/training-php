<?php
$servername = "c-web-mysql:3306";
$username = "root";
$password = "pass";

try {
	$conn = new PDO("mysql:host=$servername", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE DATABASE nguyenhong";
	$conn->exec($sql);

	echo "Database created successfully!";
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>