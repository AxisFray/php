<?php
if(empty($_POST['kawa1'])){echo "Wybrana kawa nie jest obecnie dostepna";}
else{
if($_POST['kawa1']=="K01"){$cena=5;$nazwa="Kawa palona Arabica";
echo "Wybrales kawe ".$nazwa;}
elseif($_POST['kawa1']=="K02"){$cena=4;$nazwa="Kawa palona Robusta";
echo "Wybrales kawe ".$nazwa;}
elseif($_POST['kawa1']=="K14"){$cena=3;$nazwa="Kawa bezkofeinowa";
echo "Wybrales kawe ".$nazwa;}
}
echo "<br>";
echo "Chcesz kupic ".$_POST['kawa2']."kg kawy";
echo "<br>";
if($_POST['kawa3']=="Tak"){$kl=TRUE;}
else{$kl=FALSE;}
echo "Koszt zamowienia wynosi ".$cena."zl <br>";
echo "Jestes naszym stalym klientem, masz 10% rabatu .<br>";
echo "Przed rabatem koszt twojego zamowienia wynosil ".$cena."zl<br>";
echo "Po rabacie placisz ".$cena -((1/10)*$cena)."zl";
?>