<?php
    // Conexão com o banco de dados (exemplo utilizando MySQLi)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "site";
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $imagem = $_FILES['imagem']['name'];
    $imagem_temp = $_FILES['imagem']['tmp_name'];

    // Mover a imagem para uma pasta específica
    $destino = "img/" . $imagem;
    move_uploaded_file($imagem_temp, $destino);

    // Inserir os dados na base de dados
    $sql = "INSERT INTO produtos (nome, descricao, preco, imagem) VALUES ('$nome', '$descricao', '$preco', '$destino')";
    if ($conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o produto: " . $conn->error;
    }

    $conn->close();
?>
