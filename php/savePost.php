<?php

if(isset($_POST)){

    // Database connection 
    require_once 'connection.php';

    $title = isset($_POST['article_title']) ? mysqli_real_escape_string($connection, $_POST['article_title']) : false;
    $description = isset($_POST['article_description']) ? mysqli_real_escape_string($connection, $_POST['article_description']) : false;
    $category = isset($_POST['category']) ? (int) $_POST['category'] : false;
    $userId = $_SESSION['user']['id'];

    // Validation
    $errors = array();

    if(empty($title)){
        $errors['title'] = 'The title is not valid';
    }
    if(empty($description)){
        $errors['description'] = 'The description is not valid';
    }
    if(empty($category) && !is_numeric($category)){
        $errors['category'] = 'Not a valid category';
    }

    if(count($errors) == 0){
        $sql = "INSERT INTO posts VALUES(null, $userId, $category, '$title', '$description', CURRENT_DATE());";
        $saveArticle = mysqli_query($connection, $sql);
    } else{
        $_SESSION["savePost_error"] = $errors;
    }
}

header('LOCATION: /master_php/proyecto_php/index.php');
?>