<?php
session_start();
if(isset($_SESSION['user'])){
    session_destroy();
}
header('Location: /master_php/proyecto_php/index.php');
?>