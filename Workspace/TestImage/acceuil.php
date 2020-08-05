<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
       include ("cnx.class.php");
    //    $db_conn = new PDO ('mysql:host=localhost;dbname=photo_db','root','');
    //     if(!empty($_POST)){
            
    //     }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="username">Name :</label>
        <input required type="text" name="user_name">
        <br>
        <label for="image">Image : </label>
        <input required type="file" name="profile"><br>
        <button type=submit>Go</button>
    </form>
</body>
</html>