<?php
//  $conexao = new mysqli("localhost:3308","root","","banco");
 $conexao = new mysqli("localhost:3308","root","","banco");
 if($conexao->connect_error){
  die("conexao falhou " . $conexao->connect_error);

 }
 
?>