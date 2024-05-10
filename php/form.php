<?php include 'header.php';?>


<form action="cadastro.php" method="post" class="formulario">
  <div class="form-group">
    <label for="nome_aluno">Nome do Aluno:</label>
    <input type="text" class="form-control form-control-lg" placeholder="..." name="nome_aluno" id="nome_aluno">
  </div>
  <div class="form-group">
    <label for="email_aluno">Email do Aluno:</label>
    <input type="text" class="form-control form-control-lg" placeholder="..." name="email_aluno" id="email_aluno">
  </div>
  <div class="form-group">
    <label for="telefone_aluno">Telefone:</label>
    <input type="text" class="form-control form-control-lg" placeholder="..." name="telefone_aluno" id="telefone_aluno">
 
  </div>

  <br>
  
  <div class="d-grid">
  <button id="b" type="submit" class="btn btn-info" value="Cadastrar aluno">Cadastrar Aluno(a)</button>
</div>

 
</form>

<?php include 'footer.php';?>