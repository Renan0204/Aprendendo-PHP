<?php 

$idade = $_GET["idade"];

echo"Entrada permitida para maiores de idade!";

if($idade < 18){
    echo"<br>Infelizmente você tem $idade anos! Menor de idade!!";
}else {
    echo"<br>Parabens, você tem $idade anos! Maior de idade!!";
}


?>