
<?php
$baza = mysqli_connect('localhost','root','','egzamin')
$zap2 = 'SELECT nazwaPliku , podpis from zdjecia';
$wynik = mysqli_query($baza,$zapyt2);
while($tab2 = mysqli_fetch_array($wynik)){
    echo "<img src='".$tab2['nazwaPliku'].".jpg alt='".
}




?>