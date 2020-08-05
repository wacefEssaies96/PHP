<?php 
    session_start();

    include 'ce.class.php';
    
    if(isset($_SESSION['nom'])!="") {
        header("Location: test.php");
    }

    if(isset($_POST['signup'])){
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];
        $tel = $_POST['tel'];
        $adrese = $_POST['adresse'];

        if(!preg_match("/^[a-zA-Z0-9 ]+$/",$nom)){
            $nom_error = "Nom doit contenir seulement des lettres, chiffres et espace !";
            goto error;
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $email_error="Email n'est pas valid";
            goto error;
        }
        if(strlen($pwd)<6){
            $pwd_error ="Mot de passe doit contenir au moins 6 caractére !";
            goto error;
        }
        if($pwd != $cpwd){
            $cpwd_error = "Les 2 mot de passe ne sont pas identique";
            goto error;
        }

        $client = new Login();
        $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
        $client->registerClient($nom,$email,$hashed_password,$tel,$adrese);
        header('location:test.php');
        exit(); 
    }
error:
include 'signup.phtml';
