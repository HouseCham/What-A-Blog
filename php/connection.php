<?php

// Connection to database
$server = "localhost";
$username = "root";
$password = "";
$database = "blog_master";

$connection = mysqli_connect($server, $username, $password, $database);

mysqli_query($connection, "SET NAMES 'utf8'");

// Initiate session
session_start();
?>