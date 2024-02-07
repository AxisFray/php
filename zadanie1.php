<?php
if(empty($_POST["login"])){echo "Nie wpisales loginu";}
if(strlen($_POST["haslo"])<5){"Haslo ma miec wiecej niz 5 znakow";}
else{echo "zalogowales sie jako ".$_POST["login"];}

echo "<br>";

echo  "Zglosiles ".$_POST["opcje"] ;
if(!empty($_POST["nr"])){
if($_POST["nr"]>42 or $_POST["nr"]<1){echo "Nie ma u nas takiego biura";}else{
    echo  "Awaria w biurze ".$_POST["nr"];
};}
if(!empty($_POST["zgl"])){echo "Szczegoly zgloszenia ".$_POST["zgl"];}

if(!empty($_POST["inf"]) and is_uploaded_file($_POST["plik"]["name"]))
{
    echo "Twoja reklamacja została przyjeta";
}
if($_POST["plik"]["type"]=="text/plain"){echo "Przeslales plik wlasciwego typu";}
?>