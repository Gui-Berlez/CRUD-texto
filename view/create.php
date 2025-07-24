<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/create.css">
</head>
<body>
    <div class="create-container">
        <h2>Adicionar novo texto</h2>
        <form method="POST" action="../controller/TextosController.php?acao=criar">
            <input type="text" name="titulo" placeholder="Título" required><br><br>
            <textarea name="conteudo" placeholder="Conteúdo do texto" rows="5" cols="40" required></textarea> <br><br>
            <button type="submit">Salvar</button>
        </form>
        <a href="../controller/TextosController.php">Voltar</a>
    </div>
</body>
</html>