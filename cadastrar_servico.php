<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecta ao banco de dados (substitua as informações de conexão pelos seus próprios dados)
    $conn = new mysqli('localhost', 'root', '', 'servico');
    
    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
    }
    
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $imagem = $_FILES['imagem'];
    
    // Move a imagem para uma pasta no servidor
    $caminhoImagem = 'img/' . $imagem['name'];
    move_uploaded_file($imagem['tmp_name'], $caminhoImagem);
    
    // Insere os dados no banco de dados
    $sql = "INSERT INTO servicos (nome, descricao, preco, imagem) VALUES ('$nome', '$descricao', '$preco', '$caminhoImagem')";
    
    if ($conn->query($sql) === true) {
        echo 'Serviço cadastrado com sucesso!';
    } else {
        echo 'Erro ao cadastrar serviço: ' . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
