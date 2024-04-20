<?php
if(!empty($_GET['id'])){
  include('conexao.php');
  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM usuarios WHERE  id = '$id'";

  $res = $conexao->query($sqlSelect);

   if($res->num_rows > 0 ){
   $sqlDelete = "DELETE FROM usuarios WHERE `id` = '$id'";
   $resDelete = $conexao->query($sqlDelete);
   }
   header('Location: usuarios.php');
}
?>