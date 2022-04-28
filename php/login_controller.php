<?php
// Iniciar la sesion y conexion a base de datos
require_once 'connection.php';

// Recoger los datos del formulario
if(isset($_POST)){
    $email = trim($_POST['login_email']);
    $password = $_POST['login_password'];

    // Comprobar credenciales del usuario
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $email_login = mysqli_query($connection, $sql);

    if($email_login && mysqli_num_rows($email_login) == 1){
        $user = mysqli_fetch_assoc($email_login);

        // Comprobar la contraseña
        $verify = password_verify($password, $user['password']);

        if($verify){
            // Utilizar una sesion para guardar los datos de usuario logueado
            $_SESSION['user'] = $user;

            if(isset($_SESSION['error_login'])){
                $_SESSION['error_login'] = null;
            }
        } else{
            $_SESSION['error_login'] = "Oops! there's been an error trying to login... try again";
        }
    } else{
        $_SESSION['error_login'] = "Oops! there's been an error trying to login... try again";
    }
}

//Redirigir al index.php
header('Location: /master_php/proyecto_php/index.php');