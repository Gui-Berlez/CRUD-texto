<?php include("db.php");?>

<h2>Textos do curso de inglês</h2>

<?php
$sql = "SELECT * FROM textos ORDER BY data_criacao DESC";
$resultado = $conn->query($sql);

if($resultado->num_rows > 0){
    while($linha = $resultado->fetch_assoc()){
        echo "<div style='border:1px solid #ccc; padding: 10px; margin-bottom: 10px;'>";
        echo "<h3>" . htmlspecialchars($linha["titulo"]) . "</h3>";
        echo "<p>" . nl2br(htmlspecialchars($linha["conteudo"])) . "</p>";
        echo "<small> Criado em: " . $linha["data_criacao"] . "</small>";
        echo "<a href='update,php?id=" . $linha['id'] . "'>Esditar</a>";
        echo "</div>";
    }
}else{
    echo "Nenhum texto encontrado.";
}