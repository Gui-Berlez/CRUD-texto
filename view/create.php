<h2>Adicionar texto do curso de inglês</h2>
<form method="POST" action="../controller/TextosController.php?acao=criar">
    <input type="text" name="titulo" placeholder="Título" required><br><br>
    <textarea name="conteudo" placeholder="Conteúdo do texto" rows="5" cols="40" required></textarea> <br><br>
    <button type="submit">Salvar</button>
</form>