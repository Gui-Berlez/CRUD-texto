<head>
    <meta charset="UTF-8">
    <title>Lista de textos</title>
    <link rel="stylesheet" href="../css/read.css">
</head>
<div class="header">
<h1>Lista de textos</h1>
<a class="newText" href="../view/create.php">Adicionar novo texto</a>
</div>
<?php while ($linha = $resultados->fetch_assoc()) : ?>
    <div class="card">
        <h3><?= htmlspecialchars($linha["titulo"]) ?></h3>
        <p><?= nl2br(htmlspecialchars($linha["conteudo"])) ?></p>
        <small><?= $linha["data_criacao"] ?></small><br>
        <a href="../controller/TextosController.php?acao=editar&id=<?= $linha["id"] ?>">Editar</a> |
        <a href="../controller/TextosController.php?acao=excluir&id=<?= $linha["id"] ?>" onclick="return confirm('Deseja excluir?')">Excluir</a>
    </div>
<?php endwhile; ?>