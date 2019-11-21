<?php

    $cognome = $_REQUEST["cognome"];
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $marca = $_REQUEST["marca"];
    $modello = $_REQUEST["modello"];
    $optional = $_REQUEST["optional"];
    $file = $_REQUEST["nomeFile"];

    $debug = 1;
    if($debug == 1){
        echo "nome: " . $nome . "<br>" . 
        " cognome: " . $cognome . "<br>" . 
        " email: " . $email . "<br>" . 
        " password: " . $password . "<br>" . 
        " marca: " . $marca . "<br>" . 
        " modello: " . $modello . "<br>" . 
        " optional: " . "<br>";
    }

    foreach($optional as $op){
        echo $op . "<br>";
    }

    echo $file; //questo stama solo il path

?>