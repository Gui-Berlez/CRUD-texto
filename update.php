<?php include("db.php"); 

// Verifica se o ID do texto foi fornecido
if(!isset($_GET["id"])){
    echo "ID do texto não fornecido.";
    exit;
}

// $id recebe o valor do id passado via GET. Para editar o texto específico
$id = $_GET["id"];

// Verifica se o ID é um número válido
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];

    $sql = "UPDATE textos SET titulo = '$titulo', conteudo = '$conteudo' WHERE id = $id";
    if($conn->query($sql) === true){
        echo "Texto atualizado com sucesso!";
        echo "<br><a href='read.php'>Voltar</a>";
    }else{
        echo "Erro ao atualizar: " . $conn->error;
    }
    exit;
}

//Busca dados atuais do texto
$sql = "SELECT * FROM textos WHERE id = $id";
$resultado = $conn->query($sql);

if($resultado->num_rows == 0){
    echo "Texto não encontrado.";
    exit;
}

$texto = $resultado->fetch_assoc();
?>

<h2>Editar texto</h2>
<form method="POST">
    <input type="text" name="titulo" value="<?= htmlspecialchars($texto["titulo"]) ?>" required><br><br>
    <textarea name="conteudo" rows="5" cols="40" required><?= htmlspecialchars($texto["conteudo"]) ?></textarea><br><br>
    <button type="submit">Atualizar</button>
</form>