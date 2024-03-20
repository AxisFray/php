<?php
$polaczenie = mysqli_connect('localhost','root','','ksiegarnia');

$nazw = $_POST['nazwisko'];
$im  = $_POST['imie'];
$kod = $_POST ['Kod'];
$mce = $_POST ['miejscowosc'];
$ul = $_POST ['ulica'];
$nrD = $_POST ['nr_domu'];
$pes = $_POST ['pesel'];
$tel = $_POST ['nr_telefonu'];
$mail = $_POST ['mail'];

$zapyt2 = "INSERT INTO KLIENT VALUES (null,'$nazw','$im','$kod','$mce','$ul','$nrD','$pes',
'$tel','$mail')";

$wynik2 = mysqli_query($polaczenie,$zapyt2);
echo "Dodano dane klienta ".mysqli_affected_rows($polaczenie)."klienta.";
mysqli_close($polaczenie);
?>
