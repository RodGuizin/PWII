<?php

/**
 * @author Guilherme Rodrigues
 * data agosto/2024
 * Classe com conexão ao banco de dados
 * @return boolean 
 */

class Contato {
    private $pdo;

    /**
     * Construtor da classe que estabelece a conexão com o banco de dados
     */
    function __construct() {
        // O PDO precisa de 3 parâmetros
        $dsn = "mysql:host=localhost;dbname=etimcontato";  // Data Source Name
        $dbUser = "root";  // Usuário do banco de dados
        $dbPass = "";  // Senha do banco de dados (deixe em branco se não houver senha)

        try {
            // Cria uma nova instância de PDO para conectar ao banco de dados
            $this->pdo = new PDO($dsn, $dbUser, $dbPass);
            // Define o modo de erro do PDO para exceções
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão bem-sucedida!<br>";
        } catch (PDOException $e) {
            // Captura e exibe a mensagem de erro
            echo "Erro na conexão: " . $e->getMessage();
        }
    }

    /**
     * Insere um novo usuário na tabela 'usuarios'
     * 
     * @param string $nome Nome do usuário
     * @param string $email Email do usuário
     * @param string $senha Senha do usuário
     */
    function insertUser($nome, $email, $senha) {
        // Passo 1 - Cria uma variável com a consulta SQL
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:n, :e, :s)";

        // Passo 2 - Prepara a consulta SQL
        $stmt = $this->pdo->prepare($sql);

        // Passo 3 - Associa os valores com os parâmetros
        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);

        // Passo 4 - Executa a consulta SQL
        $stmt->execute();
    }

    /**
     * Insere uma nova atividade na tabela 'atividade'
     * 
     * @param string $descricao Descrição da atividade
     * @param string $data Data da atividade
     * @param string $materia Matéria da atividade
     * @param string $professor Nome do professor
     */
    function insertAtividade($descricao, $data, $materia, $professor) {
        // Passo 1 - Cria uma variável com a consulta SQL
        $sql = "INSERT INTO atividade (descricao, data, materia, professor) VALUES (:d, :a, :m, :p)";
        
        // Passo 2 - Prepara a consulta SQL
        $stmt = $this->pdo->prepare($sql);
        
        // Passo 3 - Associa os valores com os parâmetros
        $stmt->bindValue(":d", $descricao);
        $stmt->bindValue(":a", $data);
        $stmt->bindValue(":m", $materia);
        $stmt->bindValue(":p", $professor);
        
        // Passo 4 - Executa a consulta SQL
        $stmt->execute();
    }
}

/**
 * @author Guilherme Rodrigues
 * data agosto/2024
 * Classe com conexão ao banco de dados
 * @return boolean 
 */
?>