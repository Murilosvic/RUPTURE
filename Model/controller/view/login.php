<!-- Formulário de login -->
<form method="POST" action="../Controller/LoginController.php">

    <!-- Campo de email -->
    <input 
        type="email" 
        name="email" 
        placeholder="Email" 
        required
    >

    <!-- Campo de senha -->
    <input 
        type="password" 
        name="senha" 
        placeholder="Senha" 
        required
    >

    <!-- Botão de envio -->
    <button type="submit">Entrar</button>
</form>

<?php
// Se vier erro pela URL, mostra mensagem
if (isset($_GET['erro'])) {
    echo "<p style='color:red'>Email ou senha inválidos</p>";
}
?>
