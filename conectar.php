<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco ='site';

$conexao = new MYSQLI($host,$usuario,$senha,$banco);

if($conexao -> connect_errno){
    echo  "Erro de conexão com o banco de dados";
}

else{
    echo "Conexão efetuada com sucesso!";
}