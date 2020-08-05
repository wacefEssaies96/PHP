<?php
    class BaseDonnes {
        private $host='localhost';
        private $dbname='exercice_php_test';
        private $user='root';
        private $pwd='';

        public $pdo = null;

        public function connectdb(){
            try {
                $this->pdo = new PDO(
                'mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->pwd);    
            } catch ( PDOException $e) {
                echo $e->getMessage();
            }
            return $this->pdo;
        }
    }
?>