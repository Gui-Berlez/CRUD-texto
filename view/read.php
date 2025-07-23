<h2>Lista de textos</h2>
<a href="../view/create.php">Adicionar novo texto</a>
<?php while ($linha = $resultados->fetch_assoc()) : ?>
    <div style="border:1px solid #ccc; padding:10px; margin:10px 0;">
        <h3><?= htmlspecialchars($linha["titulo"]) ?></h3>
        <p><?= nl2br(htmlspecialchars($linha["conteudo"])) ?></p>
        <small><?= $linha["data_criacao"] ?></small><br>
        <a href="../controller/TextosController.php?acao=editar&id=<?= $linha["id"] ?>">Editar</a> |
        <a href="../controller/TextosController.php?acao=excluir&id=<?= $linha["id"] ?>" onclick="return confirm('Deseja excluir?')">Excluir</a>
    </div>
<?php endwhile; ?>