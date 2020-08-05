<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2>Editer Etudiant</h2>
        </div>
        <?php
            require 'dbconnexion.php';
            $req=$cnx->prepare('SELECT * FROM students WHERE id= :id');
            $req->bindParam(':id', $_GET['id']);
            $req->execute();
            $data= $req->fetch();

        ?>
        <form action="update.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <label for="First name">
                        First Name
                    </label>
                    <input type="text" required value="<?= $data['firstname']?>" class="form-control" name="firstname" id="firstname">
                </div>
                <div class="col-md-6">
                    <label for="last name">
                        Last Name
                    </label>
                    <input type="text" required value="<?= $data['lastname']?>" class="form-control" name="lastname" id="lastname">
                </div>
            </div>
            <div class="row">
                    <div class="col-md-6">
                        <label for="Email">
                            Email
                        </label>
                        <input type="email" required value="<?= $data['email']?>" class="form-control" name="email" id="email">
                    </div>
                    <div class="col-md-6">
                        <label for="phone">
                            Phone
                        </label>
                        <input type="number" required value="<?= $data['phone']?>" class="form-control" name="phone" id="phone">
                    </div>
            </div>
            <br>
            <input type="number" name="id" value="<?= $data['id']?>" hidden>
           <div class="row">
               <button class="btn btn-outline-success" type="submit">Enregistrer</button>
               <button type="reset" class="btn btn-outline-danger"> Annuler</button>
           </div>

        </form>
    </div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

 <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>