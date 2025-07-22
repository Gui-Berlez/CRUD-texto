<?php include("db.php");

if(!isset($_GET["id"])){
    echo "ID do texto não fornecido.";
    exit;
}

$id = $_GET["id"];

$stmt = $conn->prepare( "DELETE FROM textos WHERE id = ?");
$stmt->bind_param("i",$id);
if($stmt->execute()){
    echo "Texto excluído com sucesso!";
    echo "<br><a href='read.php'>Voltar</a>";
}else{
    echo "Erro ao excluir: " . $stmt->error;
}
$stmt->close();