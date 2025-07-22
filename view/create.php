<?php include("db.php"); 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];

    $stmt = $conn->prepare( "INSERT INTO textos(titulo, conteudo) VALUES (?, ?)");
    $stmt->bind_param("ss", $titulo, $conteudo);
    if($stmt->execute()){
        echo "Texto adicionado com sucesso!";
    }else{
        echo "Erro: " . $stmt->error;
    }
    $stmt->close();
}
?>
<form method="POST">
    <h2>Adicionar texto do curso de inglês</h2>
    <input type="text" name="titulo" placeholder="Título" required><br><br>
    <textarea name="conteudo" placeholder="Conteúdo do texto" rows="5" cols="40" required></textarea> <br><br>
    <button type="submit">Salvar</button>
</form>