<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="create.php"><button class="btn btn-primary">Ajouter</button></a>
    <table class="table table-dark" border="1">
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
    
<?php
    require 'dbconnexion.php';
    $req=$cnx->prepare('SELECT * FROM students');
    $req->execute();
    while($data=$req->fetch()){
        echo '<tr>';
        echo '<td>'.$data['id'].'</td>';
        echo '<td>'.$data['firstname'].'</td>';
        echo '<td>'.$data['lastname'].'</td>';
        echo '<td>'.$data['email'].'</td>';
        echo '<td>'.$data['phone'].'</td>';
        echo '<td><a href="edit.php?id='.$data['id'].'">Editer</a> &nbsp;&nbsp;';
        echo ' <a href="delete.php?id='.$data['id'].'">Supprimer</a>  </td>';
    }
?>
</table>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

 <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
