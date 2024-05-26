<?php

$frag = $_POST['tytp'];
$con = mysqli_connect('localhost', 'root', '', 'ksiegarnia_internetowa');
$zap1 = "SELECT tytul from ksiazki";
$wyn = mysqli_query($con,$zap1);
$tab = mysqli_fetch_row($wyn);
if($_POST['tytp']==""){echo "<b>nie wpisano wyszukiwania</b>";}
else{
foreach($tab as $i)
{
    if(strstr($i,$frag)==false){
        echo "<b>Ksiazka o podanym tytule nie istnieje</b>";
    }
    else{
        $zap2 = "SELECT * from ksiazki where tytul='".$i."'";
        $wyn2 = mysqli_query($con,$zap2);
        $tab2 = mysqli_fetch_row($wyn2);
        echo "Tytul : ".$tab2[1]."<br>";
        echo "Cena : ".$tab2[2]."<br>";
        echo "Autor : ".$tab2[3]."<br>";
        echo "<br>";
    }
}

}



?>