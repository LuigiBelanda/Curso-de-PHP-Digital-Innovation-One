<?php
    
    include "Serviços/serviço_mensagemSessão.php";
    include "Serviços/serviço_validação.php";
    include "Serviços/serviço_categoriaCompetidor.php";

    $nome = $_POST['nome']; 
    $idade = $_POST['idade'];
    
    defineCategoriaCompetidor($nome, $idade);
   
    header('location: index2.php');

?>