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

   <!----Formulario Entrar---->

   <div class="login">

      <div class="logar">

            <h1>LOGIN</h1>
        <form action="login.php" method="post">
            <input type="email" id="email_usuario" name="email" placeholder="Digite seu email">
            <br>
            <input type="password" id="senha_usuario" name="senha" placeholder="Digite sua senha">
            <br>
            <input type="submit" id="btn_logar" name="submit" value="ENTRAR">
        </form>
      </div>


        <div class="logar" id="logar1">
            <img src="img/personagem2" alt="">
         </div>

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
</body>
</html>