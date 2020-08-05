<?php
    session_start();

    if(isset($_SESSION['username']) =="") {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Info Dashboard | DSI-ISET-Bizerte</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Username : <?php echo $_SESSION['username']?></h5>
                        <p class="card-text">Email : <?php echo $_SESSION['email']?></p>
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</body>
</html>