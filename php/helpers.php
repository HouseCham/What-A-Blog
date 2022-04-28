<?php
require_once 'connection.php';

function showError($errors, $field){
    $message = '';
    if(isset($errors[$field]) && !empty($field)){
        $message = $errors[$field];
    }
    return $message;
}

function deleteErrors(){
    $_SESSION['errors'] = null;
}

function getCategories($connection){
    $sql = "SELECT * FROM categories ORDER BY id ASC;";
    $categories = mysqli_query($connection, $sql);

    $result = array();
    if($categories && mysqli_num_rows($categories)>=1){
        return $categories;
    }
    return $result;
}

function getLastArticles($connection){
    $sql = "SELECT posts.*, categories.name AS 'category' FROM posts INNER JOIN categories ON posts.category_id = categories.id ORDER BY posts.id DESC LIMIT 4;";
    $lastArticles = mysqli_query($connection, $sql);

    $result = array();
    if($lastArticles && mysqli_num_rows($lastArticles)>=1){
        return $lastArticles;
    }
    return $result;
}
?>