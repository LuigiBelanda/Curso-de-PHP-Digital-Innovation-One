<?php
    
    include "Serviços/serviço_mensagemSessão.php";

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <title> Formulário de inscrição </title>
    <meta name="author" content="">
    <meta name="description" content="">

</head>

<body>

    <p> Formulário para inscrição de competidores para o torneio </p>

    <form action="script.php" method="post">

        <?php
        
            $mensagemDeSucesso = obterMensagemSucesso();
                
            if (!empty($mensagemDeSucesso)) {
                echo $mensagemDeSucesso;
            }


            $mensagemDeErro = obterMensagemErro();
            
            if (!empty($mensagemDeErro)) {
                echo $mensagemDeErro;
            }

        ?>

        <p> Seu nome: <input type="text" name="nome" />  </p>
        <p> Sua idade: <input type="text" name="idade" />  </p>
        <p> <input type="submit" value="Enviar dados do competidor" />  </p>
    </form>

</body>

</html>