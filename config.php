<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "papermind";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$base_url = "http://localhost/File%20Upload%20&%20Download%20Using%20PHP%20&%20MySQL/source%20file/";
?>