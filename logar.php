<?php
include("conexao.php");
  if(isset($_POST['email']) || isset($_POST['senha'])){
   if(strlen($_POST['email']) == 0){
    echo "entre com o email";
   }else  if(strlen($_POST['senha']) == 0){
     echo "entre com sua senha";
   }else{
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $conexao->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM `usuarios` WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $conexao->query($sql_code) or die("falha ao executar o codigo SQL" . $conexao->error);
    $qtd = $sql_query->num_rows;
    if($qtd == 1){
      $usuario = $sql_query->fetch_assoc();
      if(!isset($_SESSION)){
        session_start();
      }
      if($usuario['email'] == $_POST['email'] || $usuario['senha'] == $_POST['senha'] ){
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        header('Location: painel.php');

      }
    }else{
      $_SESSION['autenticado'] = 'não';
     
      
    }
   }
  
  }    
