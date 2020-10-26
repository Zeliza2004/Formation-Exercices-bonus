<!DOCTYPE html>
<html lang="fr">
<head>
    <title>exo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <style>
        .glouton {
            background:#DED983;
            color:#345071;
            padding:.2em .3em;
            font-size:1.2em;
            border:2px outset #DED983;
            position:relative;
            margin-bottom:-1em;
            width:25em;
            margin-left:1em;
            margin-top:1em;
        }
        .reponse {
            background-color: cyan;
            color: #345071;
            padding:.2em .3em;
            font-size:1.2em;
            border:2px outset #DED983;
            position:relative;
            margin-bottom:-1em;
            width:25em;
            margin-left:1em;
            margin-top:1em;
        }
    </style>
</head>
<body>
    <div class="glouton">
        <form method="post">
            <label for="valeur">Entrez votre valeur : </label>
            <input type="text" id="valeur" name="valeur" size="30">
            <input type="submit" value="ENVOI" name="Envoyer"/></br>
        </form>
<?php
    $montant_piece= array(50, 20, 10, 5 , 2 , 1 , 0.5 , 0.2 , 0.1); //montant des pieces
    $nombre_utilisation = array(0, 0, 0, 0 , 0 , 0 , 0 , 0 , 0); // tableau pour noter le nombre de fois ou j'utilise chaque piece.
    $nombre_tester = !empty($_POST['valeur']) ? $_POST['valeur'] : NULL; //nombre a tester
    $i = 0;
    $C = count($montant_piece);
    if (!is_numeric($nombre_tester)){
        echo "<p>Merci de rentrer un nombre </p>";
        return;
    }
?>
    </div>
    <div class="reponse">
<?php
        echo "<p></br>Pour ". $nombre_tester . " vous aurez besoin de : </p>" ;
            while ($i < $C) {
                $nombre_utilisation[$i] = (int) ($nombre_tester/$montant_piece[$i]);
                $nombre_tester -= ($nombre_utilisation[$i]* $montant_piece[$i]);
                if ($nombre_utilisation[$i] !== 0) {
                echo "<p>". $nombre_utilisation[$i] . " pièce de ". $montant_piece[$i] . " </p>";
                }
            $i++;
}
?>
</div>
</body>
</html>






