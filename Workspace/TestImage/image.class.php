<?php 
    include 'cnx.class.php';
    class Image{
        private $cnx;
        public function __construct(){
            $bd = new Bd();
            $this->cnx = $bd->connect(); 
        }
        public function ajouter(){
            $name=$_POST['user_name'];

            $images=$_FILES['profile']['name'];
            $tmp_dir=$_FILES['profile']['tmp_name'];
            $imageSize=$_FILES['profile']['size'];
    
            $upload_dir='uploads/';
            $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
            $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
            $picProfile=rand(1000, 1000000).".".$imgExt;
            move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
            $stmt=$db_conn->prepare('INSERT INTO user(username, pic_profile) VALUES (:uname, :upic)');
            $stmt->bindParam(':uname', $name);
            $stmt->bindParam(':upic', $picProfile);
            $stmt->execute();
        }
    }

?>