<?php
    $login = $_POST['in3login'];
    $haslo = $_POST['in3password'];

    if($login=="Admin123"){
        if($haslo=="adm321")
        {
            echo "<b>Zostales zalogowany !<br>";
            echo "<a href='admin.html'> <button>Przejdz do strony klienta</button></a>";
        }
        else{
            echo "Nieprawidlowe haslo";
        }
    }
    else{
        echo "Nieprawislowy login";
    }
    
    
   
    
?>