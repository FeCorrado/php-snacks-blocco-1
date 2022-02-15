<?php 
    $nome = $_GET["nome"];
    $mail = $_GET["mail"];
    $eta = $_GET["eta"];


    if (strlen($nome) > 3 && strpos($mail, "@") && is_numeric($eta)) {
        echo ('hai inserito tutto correttamente!');
    }else{
        echo ('non hai inserito i dati nel modo corretto');
    }
