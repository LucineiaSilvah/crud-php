<?php
include('logar.php');
session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Cadastro - Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">

    <header class="cabecalho">
      <h1>Sistema Cadastro </h1>
    </header>
    <main class='principal'>
      <form method="post" action="logar.php" class="formulario">
        <h2>Login</h2>
        <?php

        ?>
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="digite seu email" required>
        <label for="senha">Senha</label>
        <input type="text" name="senha" placeholder="digite sua senha" required>
        <span><?php
       
        ?></span>
        <button class="btn">Entrar</button>
      </form>
    </main>

  </div>
</body>

</html>