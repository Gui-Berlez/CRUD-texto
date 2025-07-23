<h2>Editar texto</h2>
<form method="POST" action="../controller/TextosController.php?acao=editar&id=<?= $texto["id"] ?>">
    <input type="text" name="titulo" value="<?= htmlspecialchars($texto["titulo"]) ?>" required><br><br>
    <textarea name="conteudo" rows="5" cols="40" required><?= htmlspecialchars($texto["conteudo"]) ?></textarea><br><br>
    <button type="submit">Atualizar</button>
</form>
<a href="../controller/TextosController.php">← Voltar</a>