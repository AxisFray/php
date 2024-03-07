
<?php
$baza = mysqli_connect('localhost','root','','ks');


if($baza == false)
{
    exit("blad");
}else{
    echo("brak bledu<br><br>");
}


$zap = "select nazwisko from klient where nazwisko not like''";
$wyn = mysqli_query($baza,$zap);


while($tab = mysqli_fetch_row($wyn))
{
    echo $tab[0],"<br>";
}


echo "Jest ".mysqli_num_rows($wyn)." klientow<br><br>";


$zap_ = 'select * from klient where nazwisko not like""';
$wyn_ = mysqli_query($baza,$zap_);
for ($i=1;$i <= mysqli_num_rows($wyn_);$i++)
{
    $tab_ = mysqli_fetch_array($wyn_);
    echo"adres klienta $i:  ".$tab_['Id_klienta'].", ".$tab_['Kod_pocztowy'].", ".$tab_['Miejscowosc'].", ".$tab_['Ulica'].", ".$tab_['Nr_domu']."<br>";
}


$zap3 = 'select * from klient where nazwisko not like""';
$wyn3 = mysqli_query($baza,$zap3);


echo"<ol>";
for ($i=1;$i <= mysqli_num_rows($wyn3);$i++)
{
    $tab3 = mysqli_fetch_array($wyn3);
    echo"<li>".$tab3['Imie']." ".$tab3['Nazwisko']." ma nr telefonu ".$tab3['Telefon']." i adres email: ".$tab3['AdresEmail']."</li>";
}
echo"</ol>";


$zap4 = "select Id_klienta, Nazwisko, Imie, Miejscowosc from klient where nazwisko not like''";
$wyn4 = mysqli_query($baza,$zap4);


echo"<table border='1'>";
echo"<th><td>id</td><td>imie</td><td>nazwisko</td><td>miejscowosc</td></th>";
for ($i=1;$i <= mysqli_num_rows($wyn3);$i++)
{
    $tab3 = mysqli_fetch_array($wyn3);
    // echo"<tr>".$tab3['Imie']." ".$tab3['Nazwisko']." ma nr telefonu ".$tab3['Telefon']." i adres email: ".$tab3['AdresEmail']."</tr>";
}
echo"</table>";
?>