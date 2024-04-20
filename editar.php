<?php
 include("conexao.php");
 if(!empty($_GET['id'])){
   $id = $_GET['id'];

   $sqlSelect = "SELECT * FROM usuarios WHERE  id = '$id'";
   $res = $conexao->query($sqlSelect);
   if($res->num_rows > 0){
     while($user_data = mysqli_fetch_assoc($res)){
      $nome = $user_data['nome'];
      $email = $user_data['email'];
      $senha = $user_data['senha'];
      $data_nascimento = $user_data['data_nascimento'];
      $cidade = $user_data['cidade'];
      $estado = $user_data['estado'];
      $cep = $user_data['cep'];
     }
   }else{
    header('Location:usuarios.php');
   }
 }
?>
<!DOCTYPE html>
<html lang="pr-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Cadastro - Controle</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 
   <div class="container">
 
      <header  class="cabecalho">
      <h1>Painel de Controle</h1>
      </header>
      <main class='principal'>
      <form method="POST" action="salvar.php" class="formulario cadastro">
        <h2>Editar</h2>
        <?php
         
        ?>
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="<?php echo $nome ?>" placeholder="digite seu nome" required>

        <label for="email">E-mail</label>
        <input type="text" name="email" value="<?php echo $email ?>" placeholder="digite seu email" required>

        <label for="senha">Senha</label>
        <input type="text" name="senha" value="<?php echo $senha ?>"placeholder="digite sua senha" required>

        <label for="nascimento">Data Nascimento</label>
        <input type="text" name="nascimento" value="<?php echo $data_nascimento ?>"placeholder="AAAA-MM-DD" required>

        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" value="<?php echo $cidade ?>"placeholder="digite seu estado" required>

        <label for="estado">Estado</label>
        <input type="text" name="estado" value="<?php echo $estado ?>"placeholder="Ex: PR, PE" required maxlength="2" >

        <label for="cep">CEP</label>
        <input type="text" name="cep" value="<?php echo $cep ?>"placeholder="digite seu cep" required maxlength="8">

       <input type="hidden" name="id" value="<?php echo $id ?>">
        <button class="btn" name="update" id="update" >Salvar</button>
      </form>
      <div class="controles">
      <a href="index.php" class="btn" >Voltar</a>
      <a class="btn" href="usuarios.php" >Visualizar</a>
      </div>
    </main>

  </div>
</body>
</html>