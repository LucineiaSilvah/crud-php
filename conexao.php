<?php
//  $conexao = new mysqli("localhost:3308","root","","banco");
 $conexao = new mysqli("sql308.infinityfree.com","if0_36394404","fTuFQiqOLQSSRb","if0_36394404_sistema");
 if($conexao->connect_error){
  die("conexao falhou " . $conexao->connect_error);

 }
 
?>