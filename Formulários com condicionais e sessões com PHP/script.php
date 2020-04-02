<?php

    // crie um projeto em PHP para uma competição de natação, o sistema deverá permitir a inserção de competifores com 
    // seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo, 6 a 12 anos
    // categoria infantil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistea deverá retornar a 
    // categoria para cada nadador que for cadastrado

    session_start();

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
        $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
        header('location: index2.php');
        return;
    }
    // acima verificamos se o usuário digitou ou não seu nome, caso não tenha digitado seremos redirecionados para a página inicial

    // a função strlen() conta a quantidade de caracteres que a string tem, nessa caso o a var $nome
    else if (strlen($nome) < 3){
        $_SESSION['mensagem de erro'] = 'O nome não pode conter menos de 3 caracteres';
        header('location: index2.php');
        return;
    }
    // acima verificamos se o nome colocado pelo usuário é valido, caso não for seremos redirecionados para a página inicial

    else if (strlen($nome) > 40){
        $_SESSION['mensagem de erro'] = 'O nome não pode ter mais de 40 caracteres';
        header('location: index2.php');
        return;
    }
    // acima verificamos se o nome do usuário não é muito extenso, no caso se o nome digitado passe de 40 carecteres
    // ele entrara no trecho de codigo acima e nesse caso seremos redirecionados para a página inicial

    // a função is_numeric verifica se o dado que estamos recebendo é numerico 
    else if (!is_numeric($idade)){
        $_SESSION['mensagem de erro'] = 'Informe um número para idade';
        header('location: index2.php');
        return;
    }
    // caso a varivel $idade não for numerica (isso por causa do ponto de exclamação antes da função !is_numeric)
    //  ele entrara no trecho de codigo acima e nesse caso seremos redirecionados para a página inicial

    if ($idade >= 6 && $idade <= 12) { // se idade for maior ou igual a 6 e tambem seja menor ou igual a 12 ele continua esse bloco
       for ($i = 0; $i <= count($categorias); $i++) { 
           if ($categorias[$i] == 'infantil') {
              $_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria infantil";
              header ('location: index2.php');
              return;
           }
       }
    }

    else if ($idade >= 13 && $idade < 18) {  // se idade for maior ou igual a 13 e tambem seja menor a 18 
        for ($i = 0; $i <= count($categorias); $i++) { 
            if ($categorias[$i] == 'adolescente') {
            $_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria adolescente";
              header ('location: index2.php');
              return;
            }
        }
    }

    else { // se nao corresponder a nenhuma das condições acima ele vai fazer o bloco de codigo a seguir
        for ($i = 0; $i <= count($categorias); $i++) { 
            if ($categorias[$i] == 'adulto') {
                $_SESSION['mensagem de sucesso'] = "O nadador ".$nome. " compete na categoria adulto";
                header ('location: index2.php');
                return;
            }
        }
    }

    // && = and 

    // return interrompe o código e não executa mais nada do script

    // header mostra para onde queremos redirecionar o usuário, no nosso caso estamos na maioria das
    // vezes estamos redirecionando para página inicial
    
?>