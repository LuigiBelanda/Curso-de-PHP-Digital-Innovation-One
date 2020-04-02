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
    
    $nome = $_POST['nome']; 
    $idade = $_POST['idade'];

    //var_dump($nome); // mostra qual o tipo da variável 
    //var_dump($idade); // mostra qual o tipo da variável 

    // função empty() verifica se a a varival está vazia ou não, nesse caso estamos verificando a var $nome
    if (empty($nome)){
        echo 'O nome não pode ser vazio';
        return;
    }
    // acima verificamos se o usuário digitou ou não seu nome

    // a função strlen() conta a quantidade de caracteres que a string tem, nessa caso o a var $nome
    if (strlen($nome) < 3){
        echo 'O nome deve conter mais de 3 caracteres';
        return;
    }
    // acima verificamos se o nome colocado pelo usuário é valido

    if (strlen($nome) > 40){
        echo 'O nome é muito extenso';
        return;
    }
    // acima verificamos se o nome do usuário não é muito extenso, no caso se o nome digitado passe de 40 carecteres
    // ele entrara no trecho de codigo acima

    // a função is_numeric verifica se o dado que estamos recebendo é numerico 
    if (!is_numeric($idade)){
        echo 'Informe um número para a idade';
        return;
    }
    // caso a varivel $idade não for numerica (isso por causa do ponto de exclamação antes da função !is_numeric)
    //  ele entrara no trecho de codigo acima

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
                echo "O nadador " .$nome. " compete na categoria adulto";
            }
        }
    }

    // && = and 
    
?>