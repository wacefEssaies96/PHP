
    <?php
        require 'dbconnexion.php';
        $f=$_POST['firstname'];
        $l=$_POST['lastname'];
        $e=$_POST['email'];
        $p=$_POST['phone'];
        $req = $cnx->prepare('INSERT INTO students (firstname, lastname, email, phone) VALUES (:param_firstname, :param_lastname , :param_email, :param_phone)');
        $req->bindParam(':param_firstname',$f);
        $req->bindParam(':param_lastname',$l);
        $req->bindParam(':param_email',$e);
        $req->bindParam(':param_phone',$p);
        $req->execute(); 
        header('location:index1.php');
    ?> 
