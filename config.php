<?php
$dbhost ='localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-luh';

$conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
  {
    echo "erro";
   }
else {
    echo "conexao efetuada com sucesso";
}

?>