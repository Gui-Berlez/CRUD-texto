<?php include("db.php");

if(!isset($_GET["id"])){
    echo "ID do texto não fornecido.";
    exit;
}

$id = $_GET["id"];

$sql = "DELETE FROM textos WHERE id = $id";
if($conn->query($sql) === true){
    echo "Texto excluído com sucesso!";
    echo "<br><a href='read.php'>Voltar</a>";
}else{
    echo "Erro ao excluir: " . $conn->error;
}
