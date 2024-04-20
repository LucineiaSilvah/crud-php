<?php
session_start();
 include_once("editar.php");
 if(isset($_POST['update'])){
  $id = $conexao->real_escape_string($_POST['id']);
  $nome = $conexao->real_escape_string($_POST['nome']);
  $email = $conexao->real_escape_string($_POST['email']);
  $senha = $conexao->real_escape_string($_POST['senha']);
  $data_nascimento = $conexao->real_escape_string($_POST['nascimento']);
  $cidade = $conexao->real_escape_string($_POST['cidade']);
  $estado = $conexao->real_escape_string($_POST['estado']);
  $cep = $conexao->real_escape_string($_POST['cep']);
  $sqlUpdate = "UPDATE `usuarios` SET `nome` = '$nome', `email` = '$email', `cidade` = '$cidade', `estado` = '$estado', `cep` = '$cep' WHERE `usuarios`.`id` = '$id'";
  $result = $conexao->query($sqlUpdate);
}
header('Location:usuarios.php');
?>