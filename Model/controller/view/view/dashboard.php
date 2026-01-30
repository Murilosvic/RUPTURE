<?php
// Inicia a sessão
session_start();

// Se não existir usuário logado, bloqueia acesso
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit;
}
?>

<h1>Bem-vindo, <?php echo $_SESSION['nome']; ?></h1>
