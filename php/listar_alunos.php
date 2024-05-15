<?php 
    // Incluir o arquivo de conexão ao banco de dados
    include "database.php"; 
    // Incluir o header 
    include "header.php"; 

    // Declarar uma variável para receber o comando em SQL

    $sql_listar = "SELECT * FROM sge_alunos";

    // Utilizar a função msqli_query conectar ao banco e executar o comando SQL
    // É necessário armazenar o resutado em uma variável

    // A função mysqli_query precisa de dois parâmetros conecta e recebe
    // A variável $conexao vem do arquivo database então não preciso criar novamente

    $consulta_bd = mysqli_query($conexao, $sql_listar);






?>

<!-- Tabela para listar os dados -->

<table class="table table-striped">
    <!-- Cabeçalho da tabela -->
    <thead>
        <!-- Linha da tabela -->
        <tr>
            <!-- nome do índice da coluna -->
            <th>
                Nome: 
            </th>
            <th>
                E-mail: 
            </th>
            <th>
                Telefone: 
            </th>
            <th>
                Atualizar: 
            </th>
            <th>
                Excluir: 
            </th>
        </tr>
    </thead>
        <!-- corpo da tabela -->

    <tbody>
        <?php while($dados_bd = mysqli_fetch_array($consulta_bd)):?>
      
        <!-- td -> table data -> campo que vai receber o valor -->
            <tr>
                <td>
                    <?php echo $dados_bd['nome_aluno'];?>
                </td>
                <td>
                    <?php echo $dados_bd['email_aluno']; ?>
                </td>
                <td>
                    <?php echo $dados_bd['telefone_aluno']; ?>
                </td>
                <td><a href="#"><img src="icons/up.png" alt="atualizar"></a></td>
                <td><a href="#"><img src="icons/deleta.png" alt="deletar"></a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include "footer.php"; ?>




    

    

