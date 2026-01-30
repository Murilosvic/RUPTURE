<?php
// Importa a conexão com o banco
require_once 'Conexao.php';

// Classe Usuario representa a tabela "usuarios"
class Usuario {

    // Função para buscar um usuário pelo email
    public static function buscarPorEmail($email) {

        // Abre a conexão com o banco
        $conn = Conexao::conectar();

        // SQL para buscar o usuário
        $sql = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";

        // Prepara o SQL (protege contra SQL Injection)
        $stmt = $conn->prepare($sql);

        // Liga o valor do email ao parâmetro :email
        $stmt->bindParam(':email', $email);

        // Executa a consulta
        $stmt->execute();

        // Retorna os dados do usuário em forma de array
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
