<?php
$con  = new mysqli_connect('localhost','root','','ksiegarnia');

if(!$con->connect_error){
    echo "Polacznie nawiazano <br>";

}
else{
    echo "Nie nawiazano polaczenia";
}

$con->close();
$con->query("SELECT * FROM Autor");



?>