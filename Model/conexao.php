<?php
// Classe responsável APENAS pela conexão com o banco
class Conexao {

    // Método estático para poder chamar sem instanciar a classe
    public static function conectar() {

        try {
            // Cria a conexão PDO com o MySQL
            return new PDO(
                "mysql:host=localhost;dbname=db_dts;charset=utf8", // endereço do banco
                "root",     // usuário padrão do XAMPP
                "",         // senha (vazia no XAMPP)
                [
                    // Faz o PHP mostrar erros de SQL
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );

        } catch (PDOException $e) {
            // Se der erro na conexão, para tudo e mostra a mensagem
            die("Erro de conexão: " . $e->getMessage());
        }
    }
}