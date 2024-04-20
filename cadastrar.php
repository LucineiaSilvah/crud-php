<?php
 session_start();
 include("conexao.php");


 //ver se od dados foram submetidos
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  $nome_cd = $conexao->real_escape_string($_POST['nome']);
  $email_cd = $conexao->real_escape_string($_POST['email']);
  $senha_cd = $conexao->real_escape_string($_POST['senha']);
  $nascimento_cd = $conexao->real_escape_string($_POST['nascimento']);
  $cidade_cd = $conexao->real_escape_string($_POST['cidade']);
  $estado_cd = $conexao->real_escape_string($_POST['estado']);
  $cep_cd = $conexao->real_escape_string($_POST['cep']);

  #verificar se campo esta vazio
  if(
    !empty($_POST['nome'])&&
    !empty($_POST['email'])&&
    !empty($_POST['senha'])&&
    !empty($_POST['nascimento'])&&
    !empty($_POST['cidade'])&&
    !empty($_POST['estado'])&&
    !empty($_POST['cep'])
  ){
    #se nao tiver vazio faca com o valor docampo
    $sql = "SELECT COUNT(*) AS total FROM `usuarios` where email = '$email_cd'";
    $result = mysqli_query($conexao,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row['total'] == 1){
      $_SESSION['email_existe'] = true;
      header('Location:painel.php');
      exit;
    }
    $sql = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `data_nascimento`, `cidade`, `estado`, `cep`) VALUES (NULL, '$nome_cd', '$email_cd', '$senha_cd', '$nascimento_cd', '  $cidade_cd', '$estado_cd ', '$cep_cd');";

    if($conexao->query($sql) === TRUE){
      $_SESSION['status_cadastro'] = true;
      print_r("usuario cadastrado!");
      header('Location:cadastrar.php');
    }
    $conexao->close();
  }else{
    #se estiver vazio faca alguma coisa ou ignore
    $erro = $_SESSION['status_cadastro'] = false;
  }

 }
