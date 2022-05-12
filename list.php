<?php
 include_once './php/conectDb.php';
 $query_tabela =  "SELECT nome, sobrenome, telefone, email FROM tabela";
 $result_tabela = $conn->prepare($query_tabela);
 $result_tabela->execute();
$dados = "";
 while($row_tabela = $result_tabela->fetch(PDO::FETCH_ASSOC)){
     extract($row_tabela);
     $dados .= "<tr><td>$nome</td><td>$sobrenome</td><td>$telefone</td><td>$email</td></tr>";
 }
 echo $dados;