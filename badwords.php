<!-- /*
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *.
*/ -->

<?php
$badword = $_GET['ciao'];
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
$lenghtText = strlen($text);
echo $text.' '."La lunghezza del paragrafo è:".' '.$lenghtText;
?>
