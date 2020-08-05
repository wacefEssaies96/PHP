<?php 
    class Bd{
        public $cnx=null;
        function connect(){
            try{
                $this->cnx = new PDO('mysql:host=localhost;dbname=exercice_php_test','root','');
            }catch(PDOException $e){
                echo $e->getMEssage();
            }
            return $this->cnx;
        }
    }

?>