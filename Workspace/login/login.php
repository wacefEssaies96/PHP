<?php

    session_start();

    include 'ce.class.php';

    if(isset($_SESSION['nom'])!="") {
        header("Location:../produit/produit.php");
    }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email";
            goto error;
        }

        if(strlen($pwd) < 6) {
            $pwd_error = "Password must be minimum of 6 characters";
            goto error;
        }
        
        $login = new Login();
        if(isset($_POST['chk'])){
            $auth= $login->loginEmployee($email,$pwd);
            if($auth === false){
                $auth_error = 'Incorrect Email or Password!!!';
            } else {
                //session_start();
                $_SESSION['nom'] = $auth['nom'];
                $_SESSION['email'] = $auth['email'];
                header("Location: ../produit/produit.php");
            }
            
        }else{
            $auth = $login->loginClient($email, $pwd);
            if($auth === false){
                $auth_error = 'Incorrect Email or Password!!!';
            } else {
                //session_start();
                $_SESSION['nom'] = $auth['nom'];
                $_SESSION['email'] = $auth['email'];
                header("Location: test.php");
            }
        }
    }

    error:
    include 'login.phtml';