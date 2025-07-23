<?php
require_once(__DIR__ . "/../model/Texto.php");
require_once(__DIR__ . "/../model/db.php");

$acao = $_GET["acao"] ?? "listar";

switch ($acao){

    case "criar":
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            Texto::inserir($conn, $_POST["titulo"], $_POST["conteudo"]);
            header("Location: TextosController.php?acao=listar");
        }else{
            // Exibe o formulário de criação
            include("../view/create.php");
        }
        break;

    case "editar":
        $id = $_GET["id"] ?? null;
        if($id && $_SERVER[REQUEST_METHOD] == "POST"){
            Texto::atualizar($conn, $id, $_POST["titulo"], $_POST["conteudo"]);
            header("Location: TextosController.php?acao=listar");

        }else{
            //
            $texto = Texto::buscarPorId($conn, $id);
            include("../view/update.php");
        }
        break;

    case "excluir":
    $id = $_GET["id"] ?? null;

     if ($id) {
        $texto = Texto::buscarPorId($conn, $id);

        if ($texto) {
            include("../view/delete.php");
        } else {
            echo "Texto com ID $id não encontrado.";
        }
    }
    break;

    default:
        $resultados = Texto::listarTodos($conn);
        include("../view/read.php");
        break;
}
