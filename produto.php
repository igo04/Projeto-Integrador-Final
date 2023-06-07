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
            <li><a href="servico.php">SERVIÇOS</a></li>
            <li><a href="cadastro.php">CADASTRO</a></li>
            <li><a href="entrar.php">ENTRAR</a></li>
            <li><a href="contato.php">CONTATO</a></li>
        </nav>
    </header>

   <!----Formulario Cadastro---->

   <div class="cadastrar">
   <h1>Cadastro de Produtos</h1>
    <form method="POST" action="cadastrar_produto.php" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea>
        <br>
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" required>
        <br>
        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem" required>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
    </div>






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
    header('Location:entrar.php');
}



    ?>
</body>
</html>