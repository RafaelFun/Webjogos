<?php

$usuario = "root";
$senha =  "";
$database ="webjogos";
$host = "localhost";
$senhacrip = md5($senha);
//conexão com o mysql
$conexao = mysqli_connect($host, $usuario, $senha, $database);

// verificar se tem  erro
if($conexao ->error){
    die("Não foi possivel acessar sua conta, Verifique o e-mail ou a senha");
}