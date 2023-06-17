<?php
$conexao = mysqli_connect('localhost', 'root','','bancoa3','3306');
if(!$conexao){
    die("erro de conexao");
}else{
    echo"conectado";
}
?>



