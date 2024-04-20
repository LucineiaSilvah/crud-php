<?php
include('valida_acesso.php');
?>
<!DOCTYPE html>
<html lang="pr-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - Painel</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 
   <div class="container">
 
      <header  class="cabecalho">
      <h1>Painel de Cadastros</h1>
      </header>
    <main class='principal'>
      <form method="POST" action="cadastrar.php" class="formulario cadastro">
        <h2>Cadastro</h2>
        <?php
         
        ?>
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="digite seu nome" required>
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="digite seu email" required>
        <label for="senha">Senha</label>
        <input type="text" name="senha" placeholder="digite sua senha" required>
        <label for="nascimento">Data Nascimento</label>
        <input type="text" name="nascimento" placeholder="AAAA-MM-DD" required>
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" placeholder="digite seu estado" required>
        <label for="estado">Estado</label>
        <input type="text" name="estado" placeholder="Ex: PR, PE" required maxlength="2" >
        <label for="cep">CEP</label>
        <input type="text" name="cep" placeholder="digite seu cep" required maxlength="8">
        <button class="btn" >cadastrar</button>
      </form>
      <div class="controles">
      <a href="index.php" class="btn" >Voltar</a>
      <a class="btn" href="usuarios.php" >Visualizar</a>
      </div>
    </main>

  </div>
</body>
</html>