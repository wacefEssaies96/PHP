<?php
        require 'Etudiant.class.php';
   
            $f=$_POST['firstname'];
            $l=$_POST['lastname'];
            $e=$_POST['email'];
            $p=$_POST['phone'];
    
            
            $new= new ETUDIANT ;
           $newEtud = $new->createEtudiant($f,$l,$e,$p);        
       
        header('location:index.php');
   ?> 
