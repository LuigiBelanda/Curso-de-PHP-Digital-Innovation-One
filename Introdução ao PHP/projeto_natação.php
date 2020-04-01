<?php

    // crie um projeto em PHP para uma competição de natação, o sistema deverá permitir a inserção de competifores com 
    // seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo, 6 a 12 anos
    // categoria infantil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistea deverá retornar a 
    // categoria para cada nadador que for cadastrado

    $categorias = []; // criando um array vazio para armazenar as categorias

    // categorias do projeto criadas e colocadas no array
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    // $categorias[] definimos qual array queremos selecionar para colocar as categorias
    // = 'xxxx'; é onde definimos o nome daquilo que vamos adicionar ao array

    // teste para validar se as categorias foram inseridas
    // print_r($categorias); 
    
    $nome = 'Luigi';
    $idade = 16;

    // var_dump($nome); // mostra qual o tipo da variável 
    // var_dump($idade); // mostra qual o tipo da variável 

    if ($idade >= 6 && $idade <= 12) { // se idade for maior ou igual a 6 e tambem seja menor ou igual a 12 ele continua esse bloco
       for ($i = 0; $i <= count($categorias); $i++) { 
           if ($categorias[$i] == 'infantil') {
               echo "O nadador ".$nome. " compete na categoria infantil";
           }
       }
    }

    else if ($idade >= 13 && $idade < 18) {  // se idade for maior ou igual a 13 e tambem seja menor a 18 
        for ($i = 0; $i <= count($categorias); $i++) { 
            if ($categorias[$i] == 'adolescente') {
                echo "O nadador ".$nome. " compete na categoria adolescente";
            }
        }
    }

    else { // se nao corresponder a nenhuma das condições acima ele vai fazer o bloco de codigo a seguir
        for ($i = 0; $i <= count($categorias); $i++) { 
            if ($categorias[$i] == 'adulto') {
                echo "O nadador ".$nome. " compete na categoria adulto";
            }
        }
    }

    // && = and 



?>