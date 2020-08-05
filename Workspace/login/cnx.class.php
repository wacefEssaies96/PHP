<?php 

class db{
    private $cnx=null;

    public function connect(){
        try{
            $this->cnx = new PDO("mysql:host=localhost;dbname=sgcn","root","");
        }catch(PDOException $e){
            echo $e->getMessage(); 
        }
        return $this->cnx;
    }
}

?>