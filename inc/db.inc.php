<?php
$servername = "localhost";
$dbuser = "root";
$dbpassword = "";
$db = "website";

$conn = mysqli_connect($servername, $dbuser, $dbpassword, $db);
if (!$conn){
die();
}
