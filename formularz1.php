<?php
echo "Imie - ".$_POST['f1']."<br>";
echo "Nazwisko - ".$_POST['f2']."<br>";
echo "Wiek - ".$_POST['f3']."<br>";
echo "Email - ".$_POST['f4']."<br>";

if(isSet($_POST["wyk"])){
echo "Wykształcenie - ".$_POST['wyk']."<br>";}
else{
    echo "<p style='color:red'>Nie zaznaczyles poziomu swojego wyksztalcenia</p>";
}
//echo "Jezyk - ".$_POST['jezyk']."<br>";

if(isSet($_POST["jezyk"][0])){
    foreach($_POST['jezyk'] as $j)
{
    echo "<li>".$j."<li><br>";}
}
else{
        echo "<p style='color:red'>Nie zaznaczyles jezyka</p>";
    }

echo $_FILES['plik1']['tmp_name']." ". $_FILES['plik1']['size']." ". $_FILES['plik1']['type'];

?>