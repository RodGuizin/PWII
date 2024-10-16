<?php
include 'Contato.class.php';

// Cria uma instância da classe Contato
$contato = new Contato();

// Coleta os dados do formulário
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// Insere o usuário no banco de dados
$contato->insertUser($nome, $email, $senha);
echo "Usuário cadastrado com sucesso!<br>";

// Dados fictícios para a atividade
$descricao = "Prova";
$data = "30/08/2024";
$materia = "pw2";
$professor = "Fabinho e Susu";

// Insere a atividade no banco de dados
$contato->insertAtividade($descricao, $data, $materia, $professor);
echo "Atividade cadastrada com sucesso!";
