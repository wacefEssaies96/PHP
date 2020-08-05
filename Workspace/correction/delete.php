<?php
    include 'classes/client.class.php';
    $client = new Client;
    $client->deleteClient($_GET['id']);
    header('Location:index.php?notif=delete');