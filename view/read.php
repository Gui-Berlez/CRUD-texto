<h2>Textos do curso de inglês</h2>
<?php
    while($linha = $resultados->fetch_assoc()) {
        echo "<div style='border:1px solid #ccc; padding: 10px; margin-bottom: 10px;'>";
        echo "<h3>" . htmlspecialchars($linha["titulo"]) . "</h3>";
        echo "<p>" . nl2br(htmlspecialchars($linha["conteudo"])) . "</p>";
        echo "<small> Criado em: " . $linha["data_criacao"] . "</small>";
        echo " | <a href='../view/update.php?id=" . $linha['id'] . "'>Editar</a>";
        echo " | <a href='../controller/TextosController.php?acao=excluir&id=" . $linha["id"] . "' onclick='return confirm(\"Tem certeza que deseja excluir este texto?\");'>Excluir</a>";
        echo "</div>";
    }
?>