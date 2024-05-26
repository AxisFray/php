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
    } else 
    {
        $con = mysqli_connect('localhost', 'root', '', 'ksiegarnia_internetowa');
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $log = $_POST["login"];
        $haslo = $_POST["password"];
        $telefon = $_POST["telefon"];

        $zap2="SELECT login from klienci";
        $wyn3= mysqli_query($con,$wyn2)
        $res=mysqli_fetch_row($wyn3);
        $loginuzyty=false;
        foreach($res as $i)
        {
            if($log==$i)
            {
                echo "Ten login jest uzywany przez inna osobe";
                echo "Zmien login";
                echo "<a href='zaloguj.html'><button>Zaloguj</button></a>";
                $loginuzyty=true;
            }
        }
        if($loginuzyty==false)
        {
        $zap1 = "INSERT INTO klienci (login ,haslo,imie,nazwisko,telefon) VALUES ('". $log ."','".$haslo."','".$imie."','".$nazwisko."','".$telefon."')";
        $result = mysqli_query($con,$zap1);
        if($result==false){echo "Blad";}
        else{
            echo "Dodawanie ukonczone pomyslnie!";
        }
        }
    echo "<br><a href='klient.html'><button>Powrot do strony klienta</button></a>";
    }
    
    ?>
</body>

</html>