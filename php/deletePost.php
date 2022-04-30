<?php

require_once 'connection.php';

session_start();
if(isset($_SESSION['user']) && isset($_GET['postId'])){
    $post_id = $_GET['postId'];
    $user_id = $_SESSION['user']['id'];
    $sql = "DELETE FROM posts WHERE user_id = $user_id AND id = $post_id;";
    mysqli_query($connection, $sql);
}
header('LOCATION: /master_php/proyecto_php/index.php');
?>