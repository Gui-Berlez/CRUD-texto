<head>
    <meta charset="UTF-8">
    <title>Editar texto</title>
    <link rel="stylesheet" href="../css/update.css">
</head>
<h2>Editar texto</h2>
<form class="form-container" method="POST" action="../controller/TextosController.php?acao=editar&id=<?= $texto["id"] ?>">
    <input type="text" name="titulo" value="<?= htmlspecialchars($texto["titulo"]) ?>" required><br><br>
    <textarea name="conteudo" rows="5" cols="40" required><?= htmlspecialchars($texto["conteudo"]) ?></textarea><br><br>
    <button type="submit">Atualizar</button>
</form>
<a href="../controller/TextosController.php">Voltar</a>