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
          <thead class='table_h'>
            
            <tr>
              <th colspan='10' class="tab_titulo">usuarios</th>
            </tr>

          </thead>
          <tbody class='content'>
            <?php
            while($user_data = mysqli_fetch_assoc($resultado)){
    
            
              echo" <tr class='content_tab'>";

              echo  "<tr class='linha'>";
              echo"<th>id</th>";
              echo "<td data-title ='id'>" . $user_data['id'].  "</td>";
              echo  "</tr>";

              echo  "<tr class='linha'>";
              echo"<th>nome</th>";
              echo "<td data-title ='nome'>" . $user_data['nome'].  "</td>";
              echo  "</tr>";

              echo  "<tr class='linha'>";
              echo"<th>email</th>";
              echo "<td data-title ='email'>" . $user_data['email'].  "</td>";
              echo  "</tr>";

              echo  "<tr class='linha'>";
              echo"<th>senha</th>";
              echo "<td data-title ='senha'>" . $user_data['senha'].  "</td>";
              echo  "</tr>";

              echo  "<tr class='linha'>";
              echo"<th>nasc</th>";
              echo "<td data-title ='nasc'>" . $user_data['data_nascimento'].  "</td>";
              echo  "</tr>";
              
              echo  "<tr class='linha'>";
              echo"<th>cidade</th>";
              echo "<td data-title ='cidade'>" . $user_data['cidade'].  "</td>";
              echo  "</tr>";
              echo  "<tr class='linha'>";
              echo"<th>estado</th>";
              echo "<td data-title ='estado'>" . $user_data['estado'].  "</td>";
              echo  "</tr>";

              echo  "<tr class='linha'>";
              echo"<th>cep</th>";
              echo "<td data-title ='cep'>" . $user_data['cep'].  "</td>";
              echo  "</tr>";
          
              echo  "<tr class='linha acoes'>";
              echo"<th>acoes</th>";
              echo "<td data-title ='acoes' class='acoes'>"."<a href='editar.php?id=$user_data[id]'><i class='fas fa-edit' style='color: #3377B4;'  ></i></a>"."<a href='delete.php?id=$user_data[id]'><i class='fa-solid fa-trash-can' style='color: red;' ></i></a>" .  "</td>";
              echo  "</tr>";

              echo  "</tr>";
           
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
    <footer  class="rodape">
      <p>Desenvolvido por : </p><a target="_blank" href="https://www.linkedin.com/in/lucineia-r-silva-frontend/"> Lucineia Silva ^.^ 2024</a>
      </footer>
  </div>
</body>

</html>