<?php
require_once 'connection.php';

if(!$_SESSION){
    session_start();
}

if(isset($_POST)){
    $name = isset($_POST['name']) ? mysqli_real_escape_string($connection, $_POST['name']) : false;
    $lastname = isset($_POST['lastname']) ? mysqli_real_escape_string($connection, $_POST['lastname']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($connection, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($connection, $_POST['password']) : false;

    $errors = array();
    // Validar los datos antes de guardarlos en la base de datos
    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
        echo "El nombre es valido";
    } else{
        $errors['name'] = "Wrong name";
    }
    if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)){
        echo "El apellido es valido";
    } else{
        $errors['lastname'] = "Wrong lastname";
    }
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "El email es valido";
    } else{
        $errors['email'] = "Wrong email";
    }
    if(!empty($password)){
        echo "El password es valido";
    } else{
        $errors['password'] = "Wrong password";
    }

    // Check and Insert user in database
    if(count($errors) == 0){
        $check = true;

        // Password cifrado
        $secure_password = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        // Insert user
        $sql = "INSERT INTO users VALUES (NULL, '$name', '$lastname', '$email', '$secure_password');";
        $insert = mysqli_query($connection, $sql);

        if($insert){
            $_SESSION['done'] = "You have been registered";
        } else{
            $_SESSION['errors']['general'] = "Failed to insert te user";
        }
        /* Redirect to index */
        header('Location: /master_php/proyecto_php/index.php');

    } else{
        $check = false;
        $_SESSION['errors'] = $errors;
        header('LOCATION: /master_php/proyecto_php/index.php');
    }
}
?>