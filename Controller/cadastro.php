<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["mensagem" => "Metodo nao permitido"]);
    exit;
}

$dados = json_decode(file_get_contents("php://input"), true);

$nome  = $dados["nome"]  ?? null;
$email = $dados["email"] ?? null;
$senha = $dados["senha"] ?? null;

if (!$nome || !$email || !$senha) {
    http_response_code(400);
    echo json_encode(["mensagem" => "Dados obrigatórios não enviados"]);
    exit;
}

// AQUI depois você salva no banco 👇
// INSERT INTO Cliente ...

http_response_code(201);
echo json_encode([
    "mensagem" => "Usuario cadastrado com sucesso",
    "nome" => $nome,
    "email" => $email
]);
