<?php
require_once 'connection.php';

if(!$_SESSION){
    session_start();
}

if(isset($_GET)){
    $postId = $_GET['postId'];
}

if(isset($_POST)){
    $newTitle = isset($_POST['article_title']) ? mysqli_real_escape_string($connection, $_POST['article_title']) : false;
    $newDescription = isset($_POST['article_description']) ? mysqli_real_escape_string($connection, $_POST['article_description']) : false;
    $newCategory = isset($_POST['category']) ? (int) $_POST['category'] : false;
    $errors = array();

    // Validar los datos antes de guardarlos en la base de datos
    if(empty($newTitle)){
        $errors['title'] = "Wrong title";
    }
    if(empty($newDescription)){
        $errors['description'] = "Wrong description";
    }
    if(empty($newCategory) && !is_numeric($newDescription)){
        $errors['description'] = "Wrong description";
    }

    // Database
    if(count($errors) == 0){
        $sql = "UPDATE posts SET title = '$newTitle', description = '$newDescription', category_id = '$newCategory' WHERE id = ".$postId.";";
        $editArticle = mysqli_query($connection, $sql);
        header('LOCATION: /master_php/proyecto_php/index.php');
    } else{
        $_SESSION["editPost_error"] = $errors;
        header('LOCATION: /master_php/proyecto_php/newArticle.php');
    }
}
?>