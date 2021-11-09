<?php

session_start();
setcookie("prenom","loïc", time() + 60*60*24*365);
// cookie a une durer de vie
 

$_SESSION['Julien']= 'dev en bois';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <li>
            <a href="http://localhost/superglobalPHP/traitement.php?">COUCOU</a>
        </li>
    </ul>

    <form action="traitement.php" method="post">
    <input type="text" name="personne" value="" placeholder="ecrirenom">
    <input type="submit" value="submit">
    </form>
 
</body>
</html>