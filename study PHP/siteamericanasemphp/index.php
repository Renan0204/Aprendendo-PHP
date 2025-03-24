<?php
    //Carrega arquivos
    include "header.php";
    include "dados.php";
?>

<main>
    <h1>Produtos em Destaque</h1>
    <div class="grid">

    <?php
        $i = 1; //Criamos uma var passando o número de start
        shuffle($produtos);//Usados para nostrar itens aleatório
        foreach($produtos as $produto){ //Criamos um laço de repetição
    ?>
        <!--Html dos itens aqui-->
        <div class="coluna">
            <img src="imagens/<?= $produto["imagem"] ?>"
            alt="<?= $produto["nome"] ?>">
            
        <!--Usamos uma short tag para carregar as imagens!-->
        <!--Usamos uma short tag para carregar as informações!-->
            <p><?= $produto["nome"]?> <br>
            R$ <?= $produto["valor"]?>
            </p>
            <p>
               <button><a href="produto.php?id=<?=$produto["id"]?>">Saiba Mais</a></button>
            </p> <!--Carregamos as informações usando um link!-->
        </div>

    <?php
    $i++; //Somatória da variável
    if($i > 4) break;//Dizendo quando o laço de repetição vai parar
        }
    ?>

    </div>
</main>

<?php
    include "footer.php"; //Carregamos o footer
?> 
