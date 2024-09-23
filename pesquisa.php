<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .navbar-brand{
            font-size: 2rem;
            font-style: oblique;
            font-weight: bold;
        }
    </style>
    <title>Pesquisa</title>
  </head>
  <body>
    <?php   
        $pesquisa = $_POST['busca'] ?? '';

        include "conexao.php";

        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

        $dados = mysqli_query($conn, $sql);
    ?>



    <div class="container">
        <div class="row">
            <div class="column">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand">Pesquisa</a>
                        <form class="d-flex" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Escreva o nome" autofocus name="busca">
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Funçoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            while ($linha = mysqli_fetch_assoc($dados)) {
                            $cod_pessoa = $linha['cod_pessoa'];
                            $nome = $linha['nome'];
                            $endereco = $linha['endereco'];
                            $telefone = $linha['telefone'];
                            $email = $linha['email'];
                            $data_nascimento = $linha['data_nascimento'];
                            $data_nascimento = mostrar_data($data_nascimento);
                            echo " <tr>
                                        <td>$nome</td>
                                        <td>$endereco</td>
                                        <td>$telefone</td>
                                        <td>$email</td>
                                        <td>$data_nascimento</td>
                                        <td>
                                        <a href = 'Editar.php?id=$cod_pessoa' class = 'btn btn-success btn-sm'> Editar </a>
                                        <a href'#' data-bs-toggle='modal' data-bs-target='#confirma' class = 'btn btn-danger btn-sm' onclick=\"pegar_dados('$cod_pessoa', '$nome')\"> Excluir </a>
                                        </td>
                                        
                                    </tr>";
                            };
                        ?>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-info">Home</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" tabindex="-1" id="confirma" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Exclusão usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="script_excluir.php" method="POST">
                        <p>Deseja realmente excluir este usuário?</p>
                        <p id="nome_pessoa"></p>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <input type="hidden" name="id" id="cod_pessoa">
                        <input type="submit" class="btn btn-danger" value="Confirma"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
   


    <script type="text/javascript">
        function pegar_dados(id, nome){
            document.getElementById('cod_pessoa').value = id;
            document.getElementById('nome_pessoa').innerHTML = nome;
        };
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>