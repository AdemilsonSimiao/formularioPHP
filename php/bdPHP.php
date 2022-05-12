<?php
$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(!empty($data ['enviar'])){
    var_dump($data);
   $query_msg = "INSERT INTO tabela (nome,sobrenome,cpf,email,telefone,cep,endereco,numero,complemento,bairro,cidade,estado) VALUES (:nome,:sobrenome,:cpf,:email,:telefone,:cep,:endereco,:numero,:complemento,:bairro,:cidade,:estado)";
   $add_msg = $conn->prepare($query_msg);
   $add_msg->bindParam(':nome', $data['nome'],PDO::PARAM_STR);
   $add_msg->bindParam(':sobrenome', $data['sobrenome'],PDO::PARAM_STR);
   $add_msg->bindParam(':cpf', $data['cpf'],PDO::PARAM_STR);
   $add_msg->bindParam(':email', $data['email'],PDO::PARAM_STR);
   $add_msg->bindParam(':telefone', $data['telefone'],PDO::PARAM_INT);
   $add_msg->bindParam(':cep', $data['cep'],PDO::PARAM_STR);
   $add_msg->bindParam(':endereco', $data['endereco'],PDO::PARAM_STR);
   $add_msg->bindParam(':numero', $data['numero'],PDO::PARAM_STR);
   $add_msg->bindParam(':complemento', $data['complemento'],PDO::PARAM_STR);
   $add_msg->bindParam(':bairro', $data['bairro'],PDO::PARAM_STR);
   $add_msg->bindParam(':cidade', $data['cidade'],PDO::PARAM_STR);
   $add_msg->bindParam(':estado', $data['estado'],PDO::PARAM_STR);

   $add_msg->execute();
   if($add_msg->rowCount()){
    echo "Enviado com sucesso";
   }else{
       echo "Não foi enviado com sucesso";
   }
}