<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Cadastro</title>
  </head>
  <body>
    <?php 
        include "conexao.php";
        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

        $dados = mysqli_query( $conn, $sql );
        $linha = mysqli_fetch_assoc( $dados );
    ?>




    <div class="container">
        <div class="row"">
            <div class="column">
                <h1>Editar</h1>
                <form action="script_edit.php" method="POST">
                    <div class="from-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" name="nome" required autofocus value="<?php echo $linha['nome']; ?>">
                    </div>
                    <div class="from-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
                    </div>
                    <div class="from-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">
                    </div>
                    <div class="from-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required value="<?php echo $linha['email']; ?>">
                    </div>
                    <div class="from-group">
                        <label>Data de nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" required value="<?php echo $linha['data_nascimento']; ?>">
                    </div>
                    <div class="form-group">
                        <a href="index.php" class="btn btn-info">Home</a>
                        <input type="submit" class="btn btn-success">
                        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
                        </div>
                </form>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>