<?php

    require 'dbconnect.class.php';

    class Client
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }

        public function readAllClients()
        {
            try {
                $req = 'SELECT * FROM clients';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function showOneClient($id)
        {
            try {
                $req = 'SELECT * FROM clients WHERE id= :clt_id';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':clt_id', $id);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewClient($nom, $prenom, $dateBirth, $adr, $tel)
        {
            try {
                $sql = "INSERT INTO clients(nom,prenom,datenaissance,adresse,tel) VALUES (:clt_nom,:clt_prenom,:clt_dateN,:clt_adr,:clt_tel)";
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_nom", $nom);
                $result->bindparam(":clt_prenom", $prenom);
                $result->bindparam(":clt_dateN", $dateBirth);
                $result->bindparam(":clt_adr", $adr);
                $result->bindparam(":clt_tel", $tel);
                $result->execute();
                return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updateClient($id, $nom, $prenom, $dateBirth, $adr, $tel)
        {
            try {
                $sql = 'UPDATE clients
                        SET nom = :clt_nom,
                            prenom = :clt_prenom,
                            datenaissance = :clt_dateN,
                            adresse = :clt_adr,
                            tel = :clt_tel
                        WHERE id = :clt_id';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_id", $id);
                $result->bindparam(":clt_nom", $nom);
                $result->bindparam(":clt_prenom", $prenom);
                $result->bindparam(":clt_dateN", $dateBirth);
                $result->bindparam(":clt_adr", $adr);
                $result->bindparam(":clt_tel", $tel);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function deleteClient($id)
        {
            try {
                $sql = 'DELETE FROM clients WHERE id = :clt_id';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_id", $id);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }