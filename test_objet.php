<?php
include ("./Maison.php");

$maison1= new Maison ("Cabane", 4, 5, 2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php $maison1->surfaceMaison() ?>
    </main>
</body>
</html>