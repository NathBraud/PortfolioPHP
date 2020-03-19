<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
$work = new Works;
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

	<h1> Hello World</h1>
	<h3> Bonjour

    <?php 
	    if(isset($_SESSION["account"]["username"]))
	    {
	        echo($_SESSION["account"]["username"]);
	    }
	    else
	    {
	        echo "... euh, tu n'es pas connecté(e) ? ";
	        //echo(password_hash("azerty", PASSWORD_DEFAULT));
	    }
    ?>

    

    </h3>

    <br>


    <?php

        $allworks = $work->get_works();
        foreach($allworks as $w)
        {
            echo($w["title"]);
            echo("|");
            echo($w["description"]);
        }

    ?>
</body>
</html>