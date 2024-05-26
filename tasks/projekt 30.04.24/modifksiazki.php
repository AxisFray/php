<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modyfikowanie ksiazki</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
<?php
$tytul = $_POST['tyt'];
$cena = $_POST['cena'];
$autor = $_POST['autor'];
$akcja = $_POST['akcja'];
if($akcja=="dodaj"){$akcja=1;}
else{$akcja=0;}

$con = mysqli_connect('localhost', 'root', '', 'ksiegarnia_internetowa');
$zap1 = "SELECT tytul from ksiazki";
$wyn = mysqli_query($con,$zap1);
$tab = mysqli_fetch_row($wyn);
if($_POST['tyt']==""){echo "<b>nie wpisano wyszukiwania</b>";}
elseif($akcja==0){
    $licznik=0;
foreach($tab as $i)
{
    if(strstr($i,$frag)==false){
        echo "<b>Ksiazka o podanym tytule nie istnieje</b>";
    }
    else{
        $licznik+=1;
        $zap2 = "SELECT * from ksiazki where tytul='".$i."'";
        $zap3 = "DELETE from ksiazki where tytul='".$i."'";
        $wyn2 = mysqli_query($con,$zap2);
        $tab2 = mysqli_fetch_row($wyn2);
        echo "Ksiazka ".$licznik." jest usunieta";
        echo "Tytul : ".$tab2[1]."<br>";
        echo "Cena : ".$tab2[2]."<br>";
        echo "Autor : ".$tab2[3]."<br>";
        echo "<br>";
    }
}
}
elseif($akcja=1)
{
    $zap4 = "INSERT INTO ksiazki (tytul,cena,autor) VALUES ('".$tytul."',".$cena.",'".$autor."')";
    $wyn3 = mysqli_query($con,$zap4);
    if($wyn3==true){
        echo "Rekordy dodane poprawnie<br>";
        echo "Tytul : ".$tytul."<br>";
        echo "Cena : ".$cena."<br>";
        echo "Autor : ".$autor."<br>";
        echo "<br>";
        echo "<a href='admin.html'> <button>Powrot</button></a>";
    }
}



?>


</body>

</html>