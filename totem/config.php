<?php
// conexão com o banco de dados modelo padrão do php

  $dbHost ='Localhost';
  $dbUsername = 'root';
  $dbPassword ='';
  $dbName = 'totem_senai';

  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

  if($conexao ->connect_errno)
  {
    echo "erro";
  }

  else{
    echo "sucesso";
  }

 
?>