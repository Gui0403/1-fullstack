<?php 
include("conexao.php");
$id = $_POST["id"];

$sql_code = "DELETE FROM pessoas WHERE cod_pessoa = $id";

if(mysqli_query($conn, $sql_code)){
    header("Location: index.php");
} else{
    die("Não foi possivel excluir");
};
?>