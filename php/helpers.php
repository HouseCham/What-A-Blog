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
    if(isset($_SESSION['errors'])){
        $_SESSION['errors'] = null;
    }
    if(isset($_SESSION['savePost_error'])){
        $_SESSION['savePost_error'] = null;
    }
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
    $sql = "SELECT posts.*, categories.name AS 'category' FROM posts INNER JOIN categories ON posts.category_id = categories.id ORDER BY posts.id DESC LIMIT 5;";
    $lastArticles = mysqli_query($connection, $sql);

    $result = array();
    if($lastArticles && mysqli_num_rows($lastArticles)>=1){
        return $lastArticles;
    }
    return $result;
}

function getArticles($connection){
    $sql = "SELECT posts.*, categories.name AS 'category' FROM posts INNER JOIN categories ON posts.category_id = categories.id ORDER BY posts.id DESC;";
    $lastArticles = mysqli_query($connection, $sql);

    $result = array();
    if($lastArticles && mysqli_num_rows($lastArticles)>=1){
        return $lastArticles;
    }
    return $result;
}

function showCategory($connection, $id){
    $sql = "SELECT * FROM categories WHERE id = ".$id.";";
    $categories = mysqli_query($connection, $sql);

    $result = array();
    if($categories && mysqli_num_rows($categories)>=1){
        return mysqli_fetch_assoc($categories);
    }
    return $result;
}

function getArticlesCategories($connection, $category = null){
    $sql = "";

    if(!empty($category)){
        $sql = "SELECT posts.*, categories.name AS 'category' 
        FROM posts INNER JOIN categories ON posts.category_id = categories.id 
        WHERE posts.category_id = $category ORDER BY posts.id DESC;";
    }

    $lastArticles = mysqli_query($connection, $sql);

    $result = array();
    if($lastArticles && mysqli_num_rows($lastArticles)>=1){
        return $lastArticles;
    }
    return $result;
}

function getSinglePost($connection, $id){
    $sql = "SELECT posts.*, categories.name AS 'category', users.name, users.lastname FROM posts 
            INNER JOIN categories ON posts.category_id = categories.id 
            INNER JOIN users ON posts.user_id = users.id 
            WHERE posts.id = $id;";

    $post = mysqli_query($connection, $sql);

    $result = array();
    if($post && mysqli_num_rows($post)>=1){
        return mysqli_fetch_assoc($post);
    }
    return $result;
}

function searchPosts($connection, $search){
    $sql = "";

    if(!empty($search)){
        $sql = "SELECT posts.*, categories.name AS 'category' 
        FROM posts INNER JOIN categories ON posts.category_id = categories.id 
        WHERE posts.title LIKE '%$search%' ORDER BY posts.id DESC;";
    }

    $articlesFound = mysqli_query($connection, $sql);

    $result = array();
    if($articlesFound && mysqli_num_rows($articlesFound)>=1){
        return $articlesFound;
    }
    return $result;
}
?>