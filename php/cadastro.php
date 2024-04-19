<?php
    //Inclusão do arquivo de conexão com o banco de dados

    include 'database.php';

    //Declarar variáveis para armazenar as informações
    //Enviadas via formulário

    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $telefone_aluno = $_POST['telefone'];

    //Construir uma string para cadastrar as informações
    //no banco de dados


    $sql = "INSERT INTO sge_alunos (nome_aluno, email_aluno, telefone)
    VALUES ('$nome_aluno', '$email_aluno', '$telefone_aluno')";

    //Função para cadastrar no banco

    if(mysqli_query($conexao,$sql)){

        //Função para redirecionar para a página indicada

        header("Location: listar_alunos.php");

    }else{
        echo "Falha ao cadastrar no banco";
    }