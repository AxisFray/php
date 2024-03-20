<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Łączenie z bazą danych</title>
</head>
<body>
    <form action="laczenie_z_baza.php" method="post">
        <?php
        $pol =  mysqli_connect('localhost','root','','ksiegarnia')
        $zapyt3 = "select * from klient where Id_klienta = 1";
        wynik3 = mysqli_query($pol,$zapyt3);
        $dane = mysqli_fetch_array($wynik3);
        ?>

        <label>Nazwisko<br>
        <input name="nazw" value="<?php echo $dane["Nazwisko"]; ?>" >

        <label>Imie<br>
        <input name="im" value="<?php echo $dane["Imie"]; ?>" >

        <label>Miejscowosc<br>
        <input name="miejsc" value="<?php echo $dane["Miejscowosc"]; ?>" >

        <label>Ulica<br>
        <input name="ul" value="<?php echo $dane["Ulica"]; ?>" >

        <label>Nr domu<br>
        <input name="nr" value="<?php echo $dane["Nr_domu"]; ?>" >

        <label>Pesel<br>
        <input name="number" value="<?php echo $dane["PESEL"]; ?>" >

        <label>Nr telefonu<br>
        <input name="nrT" value="<?php echo $dane["Telefon"]; ?>" >

        <label>Adres email<br>
        <input name="mail" value="<?php echo $dane["AdresEmail"]; ?>" >
        <br>
        <input type="submit" value='Aktualizuj'>
    </form>


</body>
</html>