<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "empresa";
    
    if ( $conn = mysqli_connect($server, $user, $password, $bd)){
        
    } else 
        echo "Erro";

        function mensagem($nome, $texto, $tipo){
            if ($tipo == "success"){
                echo "<div class='alert alert-$tipo' role='alert'>
  $nome $texto
</div>";
            }else{
                echo "<div class='alert alert-$tipo' role='alert'>
  $nome $texto
</div>";
            }
        }
?>