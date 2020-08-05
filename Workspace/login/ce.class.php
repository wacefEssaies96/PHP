<?php
include 'cnx.class.php';
    class Login{
        
        private $pdo;
        
        public function __construct(){
           $db = new db();
            $this->pdo = $db->connect();
        }

        public function registerClient($nom,$email,$pwd,$tel,$adresse){
            try{
                $req = $this->pdo->prepare("INSERT INTO client(nom,email,pwd,tel,adresse) VALUES (:nom,:email,:pwd,:tel,:adresse)");
                $req->bindparam(":nom",$nom);
                $req->bindparam(":email",$email);
                $req->bindparam(":pwd",$pwd);
                $req->bindparam(":tel",$tel);
                $req->bindparam(":adresse",$adresse);
                $req->execute();
                return $req;
            }catch(PDOException $e){
                $e->getMessage();
            }
        }
        public function loginClient($email,$pwd){
            try{
                $req=$this->pdo->prepare("SELECT * FROM client WHERE email = :email");
                $req->bindparam(":email",$email);
                $req->execute();
                $client = $req->fetch();
            
                if (password_verify($pwd, $client['pwd'])) {
                    return $client;
                } else {
                    return false;
                }
            }catch(PDOException $e){
                $e->getMessage();
            }
        }
        public function loginEmployee($email,$pwd){
            try{
                $req=$this->pdo->prepare("SELECT * FROM employee WHERE email = :email");
                $req->bindparam(":email",$email);
                $req->execute();
                $employee = $req->fetch();
            
                if (password_verify($pwd, $employee['pwd'])) {
                    return $employee;
                } else {
                    return false;
                }
            }catch(PDOException $e){
                $e->getMessage();
            }
        }
    }
?>