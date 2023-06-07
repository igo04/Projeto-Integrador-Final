<?php
    session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    include_once('conectar.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $sql = "SELECT * FROM cadastro_cliente WHERE email_cliente = '$email' and senha_cliente = '$senha'";

    $verificar = $conexao -> query($sql);
    
    if($verificar->num_rows < 1) 
    {
        unset($_SESSION['email_cliente']);
        unset($_SESSION['senha_cliente']);
        header('Location: entrar.php');

    }
    else {
        $_SESSION['email_cliente'] = $email;
        $_SESSION['senha_cliente'] = $senha;
        header('Location: usuario.php');
    }
}
else {
    header('Location: entrar.php');
}
