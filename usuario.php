<?php
session_start();
if (!isset($_SESSION['email_cliente']) && !isset($_SESSION['senha_cliente'])) {
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    header('Location: entrar.php');
} else {
    $logado = $_SESSION['email_cliente'];
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thells</title>
  
    <link rel="shortcut icon" href="img/logothells.jpg" type="image/x-icon">
    <link rel="stylesheet" href="lib/Nivo-Slider/themes/default/default.css">
    <link rel="stylesheet" href="lib/Nivo-Slider/nivo-slider.css">
    <link rel="stylesheet" href="css/estilo.css">   
</head>
<body>
    <header>
        <div class="log">
            <img src="img/logothells.jpg" alt="logotipo Thells">
        </div>

        <nav>
            <li><a href="index.html">HOME</a></li>
            <li><a href="pecas.php">PEÇAS</a></li>
            <li><a href="servico.html">SERVIÇOS</a></li>
            <li><a href="cadastro.php">CADASTRO</a></li>
            <li><a href="entrar.php">ENTRAR</a></li>
            <li><a href="contato.php">CONTATO</a></li>
        </nav>
    </header>

   <!----Sessão do Usuario---->

   <section class="barra_top">
    <div class="barra">
        <h1>Area do Usuario</h1>
    </div>

    <div class="barra">
        <a href="sair.php">SAIR</a>
    </div>
   </section>

   <section class="usuario">
    <?php
        echo "<h2>Olá, $logado</h2>";
    ?>
     <p>Seja Bem Vindo ao Thells</p>
   </section>







    <!--------------Rodape------------>

    <footer>    
        <div class="rodape">
            <ul>
                <li><a href="index.html"></a>HOME</li>
                <li><a href="pecas.html"></a>PEÇAS</li>
                <li><a href="servico.html"></a>SERVIÇO</li>
                <li><a href="cadastro.html"></a>CADASTRO</li>
                <li><a href="entrar.html"></a>ENTRAR</li>
                <li><a href="contato.html"></a>CONTATO</li>
            </ul>
        </div>

        <dvi class="rodape">
            <p>Rua Antonieta nº 220 - Centro</p>
            <p>Rio de Janeiro - Rj</p>
        </dvi>

        <div class="rodape">
            <p>Siga as  nossas redes sociais</p>
            <a href="#"><img src="img/facebook.png" alt="facebook"></a>
            <a href="#"><img src="img/instagram.png" alt="instagram"></a>
            <a href="#"><img src="img/youtube.png" alt="youtube"></a>
        </div>
    </footer>

    <!-------------Configurações JavaScript----------------->
    
    <script src="js/jquery-3.7.0.js"></script>
    <script src="lib/Nivo-Slider/jquery.nivo.slider.js"></script>
    <script src="js/funcoes.js"></script>

    <!--------------COnfigurações php------------------->
    <?php

    if(isset($_POST['submit'])){
    include_once('conectar.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $clientes = mysqli_query($conexao, "INSERT INTO cadastro_cliente(nome_cliente, email_cliente, senha_cliente) VALUES ('$nome','$email','$senha')");
}


    ?>
</body>
</html>