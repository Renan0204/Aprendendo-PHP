<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scripts PHP</title>
</head>
<body>
    <!--<script language="php">
        $nome = "Renan Oliveira";
    </script> Essa era a forma que era escrito 
    a linguagem de PHP antes da versão 8 ! -->

    <?php //Super tag PHP?>

    <? //Short open tag PHP?>

    <!--<% //ASP microsoft usava para ASP %>-->

    <!-- "print" sempre retorna o valor inteiro, 
    O echo não tem um valor de retorno,
    e aceita múltiplos argumentos, ele se torna mais rápido 
    e flexível, sendo mais aconselhável de ser utilizado.-->

    <?php 
        $nome = "Renan Oliveira";
        echo"<p>Eu me chamo $nome!</p>";
    ?>


</body>
</html>