<?php
    include "header.php";
    include "dados.php";
    $id = $_GET["id"]; //Usamos para pegar (Trazer) 
?>

<main>
    <div class="grid-2">
        <div class="coluna">
            <img src="imagens/<?= $produtos[$id]["imagem"]?>" 
            alt="<?= $produtos[$id]["nome"]?>">
        </div>
        <div class="coluna">
            <h2><?=$produtos[$id]["nome"]?></h2>
            <p class="valor">R$ <?= $produtos[$id]["valor"]?></p>
            <button id="comprar"><a href="produto.php?id=<?=$produto["id"]?>">Comprar</a></button>
        </div>
    </div>
</main>

<?php
    include "footer.php";
?>