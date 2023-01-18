<?php

$salaire = 2000;
$branche = "informatique";
$note_bac = 11.5;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi</title>
</head>

<body>
    <?= "BONJOUR" ?>
    <br />
    <br />
    <?= "Le salaire auquel j'aspire est de : <b>" . $salaire . "</b>€.<br/>" ?>
    <?= "La branche dans laquelle je veux travailler est : l'<b>" . $branche . "</b>.<br/>" ?>
    <?= "Pour préciser, l'<b>" . $branche . "</b> est mon dada." ?>
    <br />
    <?= "La note moyenne que j'ai obtenu au bac est <b>" . $note_bac . "</b>." ?>
</body>

</html>