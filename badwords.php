<!-- /*
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *.
*/ -->

<?php
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
$textLenght = strlen($text);
$get = $_GET["parola"];
$textTrasform = str_replace($get,'***',$text);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p><?php echo $text; ?></p>
        <p>Il paragrafo è lungo <?php echo $textLenght; ?> caratteri</p>
        <p> <?php echo $textTrasform ?></p>
    </body>
</html>
