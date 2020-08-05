<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introduction PHP</title>
</head>
<body></body>
    <?php
        // commentaire une seule ligne
        # commentaire une seule ligne
        /* commentaire sur 
        plusieurs
        lignes
        */
        echo '<h1>Hello World !</h1>';

        //Case sensitivity
        Echo "Hello World ! <br>";
        ECHO "Hello World ! <br>";
        echo "Hello World ! <br>";
        echo "<hr>";

        $greeting = "Hello World!";
        echo $greeting;
        //echo $GREETING; //undefined variable

        //les variables
        echo "<hr><h1>Variables</h1>";
        $txt = "Bonjour";
        $txt2 = "How are you?";
        $x = 10;
        $y = 5.2;
        $z = true;
        $abc = null;
        echo $txt.' DSI 21, '.$txt2.'<br>';
        echo("$txt DSI 21<br>");
        print $txt." DSI 21<br>";
        print($txt." DSI 21<br>");
        var_dump($x);
        var_dump($y);
        var_dump($z);
        var_dump($abc);

        $colors1 = array('red', 'blue', 'yellow');
        var_dump($colors1);

        $colors2 = ['purple', 'green', 'black', $colors1];
        var_dump($colors2);

        $tab1 = ['hello', 2, true, 10.5, $colors2];
        var_dump($tab1);

        echo $colors1[0];
        echo '<br>';
        echo $tab1[4][2];
        echo '<br>';
        echo $tab1[4][3][2];
        echo '<br>';
        echo 'le tableau tab1 contient '.count($tab1).' éléments';
        echo '<br>';
        for ($i=0; $i < count($colors1); $i++) { 
            echo $colors1[$i].' | ';
        }
        echo '<h3>Tableau Associatif</h3>';
        $etudiants = array('nom' => 'Ben salah', 'prenom' => 'Ahmed', 'adresse' => 'Bizerte');
        echo $etudiants['nom'];
        echo '<br>';

        foreach ($etudiants as $etud)
        {
            echo $etud.' ';
        }
        echo '<br>';
        echo '<br>';
        foreach ($etudiants as $i => $etud)
        {
            echo $i.': '.$etud.'<br>';
        }

        $age = array(
            "Mohamed" => "32",
            "Sarra" => "20",
            "Ali" => "25"
        );

        echo $age['Sarra'];
        echo '<br>';

        foreach($age as $indice => $valeur){
            echo $indice.' a '.$valeur.' ans<br>';
        }
        echo '<hr>';

        $cars = array("Volvo", "BMW", "Toyota");
        rsort($cars);

        $clength = count($cars);
        for($x = 0; $x < $clength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }

        asort($age); //trier un tableau associatif selon la valeur
        foreach($age as $indice => $valeur){
            echo $indice.' a '.$valeur.' ans<br>';
        }
        echo '<hr>';

        ksort($age); //trier un tableau associatif selon l'indice
        foreach($age as $indice => $valeur){
            echo $indice.' a '.$valeur.' ans<br>';
        }
        echo '<hr>';
        echo '<h3>Les chaines de caractères</h3>';
        $txt = "How are you ?";
        echo strlen($txt); //longueur d'une chaine de caractère
        echo '<br>';
        echo str_word_count($txt);
        echo '<br>';
        echo strrev($txt);
        echo '<br>';
        echo strpos($txt, 'are');
        echo '<br>';
        $txt = "Hello World";
        echo str_replace('World', 'DSI21', $txt);
        echo '<br>';

        if ($age['Mohamed'] > $age['Sarra']) {
            echo 'Mohamed est plus agé que Sarra';
        } else {
            echo 'Sarra est plus agée que Mohamed';
        }
        echo '<br>';

        function sayHello()
        {
            echo 'Hello !';
        }

        sayHello();

        echo '<br>';

        function sayHello2($name)
        {
            echo 'Hello '.$name.'!';
        }

        sayHello2('Mohamed');

    ?>
</body>
</html>