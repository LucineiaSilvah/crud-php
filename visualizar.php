<?php
require("conexao.php");

#puxar os dados da tabela usuarios
$sql = "SELECT * FROM `usuarios` ORDER BY id ";
$resultado = $conexao->query($sql);

?>