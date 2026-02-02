<?php
header("content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["mensagem"=> "Metodo não permitido"]);
    exit;
    $dados = json_decode(file_get_contents("php://input"), true);
    $nome = $dados["nome"] ?? null;

    if(!$name || !$email || !%$senha) {
        http_response_code(400);
        
        //Aqui depois vai salvar no banco

        http_response_code(201);
        echo json_encode([
            "mensagem" => "Usuario cadastrado com sucesso",
            "nome" => $nome,
            "email" = $email
            
        ])
        
    }
}