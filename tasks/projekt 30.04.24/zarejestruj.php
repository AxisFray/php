<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarejestruj sie!</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    if (empty($_POST["imie"]) or empty($_POST["nazwisko"]) or empty($_POST["login"]) or empty($_POST["password"]) or empty($_POST["telefon"])) {
        echo "Niepelny formularz";
    } else {
        $con = mysqli_connect('localhost', 'root', '', 'uzytkownicy');
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $log = $_POST["login"];
        $haslo = $_POST["password"];
        $telefon = $_POST["telefon"];
        $zap1 = "INSERT INTO uzytkownicy ( login ,haslo,imie,nazwisko,telefon) VALUES (" . $log . "," . $haslo . "," . $imie . "," . $nazwisko . "," . $telefon . ")";
        if (!mysqli_query($con, $zap1)) {
            echo "Blad " . mysqli_error($con);
        } else {
            echo "Dodawanie uzytkownika zakonczone sucesem";
        }
    }

    ?>
</body>

</html>