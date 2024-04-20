<?php 
require("visualizar.php");
include('valida_acesso.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Cadastro - Usuarios</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/784205f3d6.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container">

    <header  class="cabecalho">
      <h1>Usuarios Cadastros</h1>
    </header>
    <main class='principal'>
      <?php
   
      ?>
      <div class="usuarios">
        <table  class="tabela">
          <thead>
            
            <tr>
              <th colspan='10' class="tab_titulo">usuarios</th>
            </tr>
            <tr>
             
              <th>id</th>
              <th>nome</th>
              <th>email</th>
              <th>senha</th>
              <th>nascimento</th>
              <th>cidade</th>
              <th>estado</th>
              <th>cep</th>
              <th>açoes</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($user_data = mysqli_fetch_assoc($resultado)){
              echo "<tr>";
              echo "<td>" . $user_data['id'] ."</td>"; 
              echo "<td>" . $user_data['nome'] ."</td>"; 
              echo "<td>" . $user_data['email'] ."</td>"; 
              echo "<td>" . $user_data['senha'] ."</td>"; 
              echo "<td>" . $user_data['data_nascimento'] ."</td>"; 
              echo "<td>" . $user_data['cidade'] ."</td>"; 
              echo "<td>" . $user_data['estado'] ."</td>"; 
              echo "<td>" . $user_data['cep'] ."</td>"; 
              echo "<td class='acoes'>" ."<a href='editar.php?id=$user_data[id]'><i class='fas fa-edit' style='color: #3377B4;'  ></i></a>"."<a href='delete.php?id=$user_data[id]'><i class='fa-solid fa-trash-can' style='color: red;' ></i></a>" ."</td>"; 
              echo "</tr>";
            }
            
            ?> 
          </tbody>
        </table>
      </div>
      <div class="controles">
        <a href="painel.php" class="btn">Voltar</a>
        <a class="btn" href="logout.php">Sair</a>
      </div>
    </main>

  </div>
</body>

</html>