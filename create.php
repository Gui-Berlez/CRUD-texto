<?php include("db.php"); 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];

    $sql = "INSERT INTO textos(titulo, conteudo) VALUES ('$titulo', '$conteudo')";
    if($conn->query($sql) === true){
        echo "Texto adicionado com sucesso!";
    }else{
        echo "Erro: " . $conn->error;
    }

}
?>
<form method="POST">
    <h2>Adicionar texto do curso de inglês</h2>
    <input type="text" name="titulo" placeholder="Título" required>
    <textarea name="conteudo" placeholder="Conteúdo do texto" rows="5" cols="40" required></textarea> <br><br>
    <button type="submit">Salvar</button>
</form>