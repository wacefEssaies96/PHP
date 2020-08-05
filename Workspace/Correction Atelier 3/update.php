<?php
    require 'dbconnexion.php';

    $f=$_POST['firstname'];
    $l=$_POST['lastname'];
    $e=$_POST['email'];
    $p=$_POST['phone'];
    $id =$_POST['id'];

    $req= $cnx->prepare(
        'UPDATE students
        SET firstname = :firstname , lastname = :lastname , email= :email , phone= :phone WHERE id= :id'


    );
    $req->bindParam(':firstname',$f);
        $req->bindParam(':lastname',$l);
        $req->bindParam(':email',$e);
        $req->bindParam(':phone',$p);
        $req->bindParam(':id',$id);
        $req->execute();

        header('Location:index1.php');

?>