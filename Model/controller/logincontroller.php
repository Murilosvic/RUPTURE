<?php
// Inicia a sessão (OBRIGATÓRIO para login)
session_start();

// Importa o Model Usuario
require_once '../Model/Usuario.php';

// Recebe os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Busca o usuário no banco pelo email
$usuario = Usuario::buscarPorEmail($email);

// Verifica:
// 1) Se o usuário existe
// 2) Se a senha digitada bate com a senha criptografada do banco
if ($usuario && password_verify($senha, $usuario['senha'])) {

    // Guarda dados do usuário na sessão
    $_SESSION['id_usuario'] = $usuario['id_usuario'];
    $_SESSION['nome'] = $usuario['nome'];

    // Redireciona para a área logada
    header("Location: ../View/dashboard.php");
    exit;

} else {

    // Se der erro, volta para o login
    header("Location: ../View/login.php?erro=1");
    exit;
}
