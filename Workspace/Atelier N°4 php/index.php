<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Gestion des etudiants</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Gestion des Etudiants</h1>
        </div>
        <div>
          <a href="create.php"><button class="btn btn-primary" type="submit">Ajouter</button></a>
        </div>
        <table class="table tablehover ">
            <thead>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>E-mail</th>
                <th>Phone</th>
            </thead>
            <tbody>
                <?php
                    require 'Etudiant.class.php';
                    $Etud = new ETUDIANT ;
                    $listEtud = $Etud->readAllStudents();
                    while($data = $listEtud->fetch()){?>

                        <tr>
                            <td><?= $data['id'] ?></td>
                            <td><?= $data['firstname'] ?></td>
                            <td><?= $data['lastname'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['phone'] ?></td>
                        </tr>


                   <?php }
                ?>
            </tbody>
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