<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modyfikowanie klienta</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'uzytkownicy');
    

        if ($_POST['akcja'] == "dodaj") {

            $im = $_POST["im"];
            $naz = $_POST["nazw"];
            $tel = $_POST["tel"];
            $login = $_POST["login"];
            $haslo = $_POST["haslo"];
            $zap1 = "insert into klienci (login,haslo,imie,nazwisko,telefon) values (" . $login . "," . $haslo . "," . $im . "," . $naz . "," . $tel . ")";

            if (mysqli_query($con, $zap1)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $zap1 . "<br>" . mysqli_error($conn);
            }
        } else {
            if (empty($_POST['id'])) {
                if (empty($_POST['login'])) {
                    echo "Nie wpisales loginu ani id ";
                } else {
                    $login = $_POST['login'];

                }
            } else {

            }
        }
    
    ?>
</body>

</html>