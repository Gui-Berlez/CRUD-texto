<?php
require_once("db.php");

Class Texto{
    public static function listarTodos($conn){
        $sql = "SELECT * FROM textos ORDER BY data_criacao DESC";
        //var_dump($conn->query($sql));
        return $conn->query($sql);
    }

    public static function buscarPorId($conn, $id){
        $stmt = $conn->prepare("SELECT * FROM textos WHERE id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public static function inserir($conn, $titulo, $conteudo){
        $stmt = $conn->prepare("INSERT  INTO textos(titulo, conteudo) VALUES(?, ?)");
        $stmt->bind_param("ss",$titulo, $conteudo);
        return $stmt->execute();
    }

    public static function atualizar($conn, $id, $titulo, $conteudo){
        $stmt = $conn->prepare("UPDATE textos SET titulo = ?, conteudo = ? WHERE id = ?");
        $stmt->bind_param("ssi", $titulo, $conteudo, $id);
        return $stmt->execute();
    }

    public static function excluir($conn, $id){
        $stmt = $conn->prepare("DELETE FROM textos WHERE id = ?");
        $stmt->bind_param("i",$id);
        return $stmt->execute();
    }

}