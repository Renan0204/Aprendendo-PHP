<?php
    include "header.php";
    include "dados.php";
?>

<main>
    <h1>Nossos Produtos</h1>
    <div class="grid">

    <?php
        foreach($produtos as $produto){ 
    ?>
        <!--Html dos itens aqui-->
        <div class="coluna">
            <img src="imagens/<?= $produto["imagem"] ?>" 
            alt="<?= $produto["nome"] ?>">
            
            <p><?= $produto["nome"]?> <br>
            R$ <?= $produto["valor"]?>
            </p>
            <p>
                <button><a href="produto.php?id=<?=$produto["id"]?>">Saiba Mais</a></button>
            </p>
        </div>

    <?php
        }
    ?>

    </div>
</main>

<?php
    include "footer.php";
?>