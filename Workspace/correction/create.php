<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Nouveau client</title>
</head>
<body>
    <?php
        if (!empty($_POST)) {
            include './classes/client.class.php';
            $client = new Client;
            $client->addNewClient($_POST['firstname'], $_POST['lastname'], $_POST['dateN'], $_POST['adresse'], $_POST['phone']);
            header('Location:index.php?notif=add');
            exit();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Ajouter un nouveau client</h3>
        </div>
        <fieldset>
            <legend>Nouveau client</legend>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" required name="firstname" class="form-control" id="firstname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" required name="lastname" class="form-control" id="lastname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dateN">Date de naissance</label>
                            <input type="date" required name="dateN" class="form-control" id="dateN">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" required name="phone" class="form-control" id="phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" name="adresse" id="adresse" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-primary">Enregistrer</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-block btn-outline-secondary">Annuler</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>