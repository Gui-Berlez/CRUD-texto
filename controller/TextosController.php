<?php
require_once(__DIR__ . "/../model/Texto.php");
require_once(__DIR__ . "/../model/db.php");

$acao = $_GET["acao"] ?? "listar";

switch ($acao){
    case "criar":
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            Texto::inserir($conn, $_POST["titulo"], $_POST["conteudo"]);
            header("Location: TextosController.php");
        }else{
            // Exibe o formulário de criação
            include("../view/create.php");
        }
        break;

    case "editar":
        $id = $_GET["id"] ?? null;
        if($id && $_SERVER["REQUEST_METHOD"] == "POST"){
            Texto::atualizar($conn, $id, $_POST["titulo"], $_POST["conteudo"]);
            header("Location: TextosController.php");

        }else{
            // Busca o texto pelo ID
            $texto = Texto::buscarPorId($conn, $id);
            include("../view/update.php");
        }
        break;

    case "excluir":
        $id = $_GET["id"] ?? null;
        if($id){
            Texto::excluir($conn, $id);
            header("Location: TextosController.php");
        }
        break;

    default:
        $resultados = Texto::listarTodos($conn);
        include("../view/read.php");
        break;
}
