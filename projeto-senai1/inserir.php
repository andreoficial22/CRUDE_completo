<?php
include "conexao.php";



$nome = $_POST['primeiro_nome'];
$email = $_POST['email_digitado'];


$sql= "insert into tb_inscritos
       (nome_inscrito, email_inscrito) values
       ('$nome','$email')";

$inserir = $pdo->prepare($sql);

try{
    $inserir->execute();
    header("Location:agradecimento.html");


}catch(PDOException $erro){
   echo "falha ao inserir".$erro->getMessage(); 
}








?>