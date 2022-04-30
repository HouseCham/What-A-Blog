<?php
require_once 'connection.php';

if(!$_SESSION){
    session_start();
}

if(isset($_POST)){
    $newName = isset($_POST['edit_name']) ? mysqli_real_escape_string($connection, $_POST['edit_name']) : false;
    $newLastname = isset($_POST['edit_lastname']) ? mysqli_real_escape_string($connection, $_POST['edit_lastname']) : false;
    $errors = array();

    // Validar los datos antes de guardarlos en la base de datos
    if(empty($newName) && is_numeric($newName) && preg_match("/[0-9]/", $newName)){
        $errors['name'] = "Wrong name";
    }
    if(empty($newLastname) && is_numeric($newLastname) && preg_match("/[0-9]/", $newLastname)){
        $errors['lastname'] = "Wrong lastname";
    }
    
    // Check and update user in database
    if(empty($errors)){

        // Update user
        $sql = "UPDATE users SET name = '$newName', lastname = '$newLastname' WHERE id = ".$_SESSION['user']['id'].";";
        $update = mysqli_query($connection, $sql);

        if($update){
            $_SESSION['user']['name'] = $newName;
            $_SESSION['user']['lastname'] = $newLastname;
            $_SESSION['done'] = "User updated";
        } else{
            $_SESSION['errors']['general'] = "Failed to update the user";
        }
        /* Redirect to index */
        header('Location: /master_php/proyecto_php/index.php');

    } else{
        $_SESSION['errors'] = $errors;
        header('LOCATION: /master_php/proyecto_php/index.php');
    }
}
?>