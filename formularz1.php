<?php
echo "Imie - ".$_POST['f1']."<br>";
echo "Nazwisko - ".$_POST['f2']."<br>";
echo "Wiek - ".$_POST['f3']."<br>";
echo "Email - ".$_POST['f4']."<br>";
echo "Wykształcenie - ".$_POST['wyk']."<br>";
echo "Zgoda - ".$_POST['zgoda']."<br>";
//echo "Jezyk - ".$_POST['jezyk']."<br>";
foreach($_POST['jezyk'] as $j)
{
    echo "<li>".$j."<li><br>";
}


?>