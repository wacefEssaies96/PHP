<?php
    include 'dbconnect.class.php';
    class ETUDIANT{
        private $cnx;
         public function __construct()
         {
             $db = new BaseDonnes;
             $this->cnx = $db->connectdb();
         }
         
         
         public function readAllStudents(){
             try {
                 $req ='SELECT * FROM students';
                 $result = $this->cnx->prepare($req);
                 $result->execute();
                 return $result;
             } catch (PDOException $e) {
                 echo $e->getMessage();
             }
         }
         
         public function createEtudiant($firstname,$lastname,$email,$phone){
             
             try {
                 $sql="INSERT INTO students (firstname, lastname, email, phone)
                 VALUES(:param_firstname, :param_lastname , :param_email, :param_phone)";
                 $result=$this->cnx->prepare($sql);
                 $result->bindParam(':param_firstname',$firstname);
                 $result->bindParam(':param_lastname',$lastname);
                 $result->bindParam(':param_email',$email);
                 $result->bindParam(':param_phone',$phone);
                 $result->execute();
                 return $result ;
             } catch (PDOException $e) {
                 echo $e->getMessage();
             }
         }


    }
?>