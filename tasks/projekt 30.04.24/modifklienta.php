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
    $con = mysqli_connect('localhost', 'root', '', 'ksiegarnia_internetowa');
    
            $id = $_POST['id'];
            $im = $_POST["imie"];
            $naz = $_POST["nazw"];
            $tel = $_POST["tel"];
            $login = $_POST["login"];
            $haslo = $_POST["haslo"];
            $miasto = $_POST['miasto'];
        if ($_POST['akcja'] == "dodaj") {
            
            $zap1 = "insert into klienci (login,haslo,imie,nazwisko,telefon,miejscowosc) values ('".$login."','".$haslo."','".$im."','".$naz."','".$tel."','".$miasto."')";
            $wyn1=mysqli_query($con, $zap1);
            if ($wyn1) {
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
                    $zap2 = "DELETE from klienci where login='".$login."'";
                    $wyn2 = mysqli_query($con,$zap2);
                    if($wyn2){echo "Uzytkownik o loginie ".$login." poprawnie usuniety<br>";}
                }
            } else {
                $zap3 = "DELETE from klienci where idKlienta=".$id."";
                $wyn3 = mysqli_query($con,$zap3);
                if($wyn3){echo "Uzytkownik o id ".$id." zostal poprawnie usuniety <br>";}
            }
        }
        echo "<a href='admin.html'> <button>Powrot</button></a>";
    ?>
</body>

</html>