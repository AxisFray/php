<?php
$con = mysqli_connect('localhost','root','');

$szkola = "CREATE DATABASE  IF NOT EXISTS szkola";

$wynik1 = mysqli_query($con,$szkola);

if(mysqli_select_db($con,'szkola'))
{
    echo "Wybrano baze szkola <br>";
}
else{
    exit("Nie ma dostepu <br>");
}

$tab1 = "CREATE TABLE IF NOT EXISTS uczen(idUcznia int auto_increment
primary key,idKlasy int, imie varchar(20), nazwisko varchar(25),adres varchar(20) )";
$tab2 = "CREATE TABLE IF NOT EXISTS klasa(idKlasy int primary key auto_increment , symbol varchar(4)";
$wynik3 = mysqli_query($con,$tab2);

$zap = "INSERT INTO klasa VALUES (1,'IIIa'),(2,'Ib'),(3,'IIa')";
$zap2 = "INSERT INTO uczen VALUES (1,1,'Alicja','Kulaga','Malinowa 7'),
(2,2,'Lukasz','Nowak','Jarzynowa 10')";
$wyn4 = mysqli_query($con,$zap);
$wyn4 = mysqli_query($con,$zap2);

$zap5 = "SELECT * FROM uczen";
$wyn5 = mysqli_query($con,$zap5);


$connect = mysqli_connect('lokalhost','root','');

$kino = "CREATE DATABASE kino";
$tab1 = "CREATE TABLE filmyy (Id_filmu int auto_increment Primary key, Tytul_filmu varchar(30), Rezyser 
varchar(30), Rok_prod int(4))";
$tab2 = "CREATE TABLE klient (Id_klienta int auto_increment Primary key, Nazwisko_imie varchar(40))";
$insert1 = "INSERT INTO filmy VALUES (1,'W Pustyni i w puszczy','Adrian P',1999)";
$wynik1 = mysqli_query($kino,$connect);
$wynik2 = mysqli_query($tab1,$connect);
$wynik3 = mysqli_query($tab2,$connect);
$wynik4 = mysqli_query($insert,$connect);


?>