<?php
    $con = mysqli_connect('localhost', 'root', '', 'ksiegarnia_internetowa');
    $zap1 = "SELECT login from klienci ";
    $zap2 = "SELECT haslo from klienci";
    $login = $_POST['in2login'];
    $haslo = $_POST['in2password'];
    $wyn1 = mysqli_query($con,$zap1);
    $wyn2 = mysqli_query($con,$zap2);
    $tab1 = mysqli_fetch_row($wyn1);
    $tab2 = mysqli_fetch_row($wyn2);
    $zal= false;
    $l = 0;
    foreach($tab1 as $i)
    {
        if($login==$i)
        {
            $zal=true;
            if($password==$tab2[$l]){
                echo "<b>Zostales zalogowany !<br>";
                echo "<a href='klient.html'> <button>Przejdz do strony klienta</button></a>";
            }
            else{
                echo "Nieprawidlowe haslo";
                
            }
        }
        
        $l+=1;
    }
    if($zal==false){echo "Nie znaleziono uzytkownika";}

?>