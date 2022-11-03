<?php
require_once("controller/controllerCadastro.php");
?>
<html>
    <head>
        <title>Sistema de login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    </head>
    <body>
        <!--CABEÇALHO-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                            <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web 2.0
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <!--FIM DO CABEÇALHO-->
                
            <!--NAVBAR-->
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">   
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                                    <a class="nav-link" href="consulta.php">Consultar</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!--FIM DA NAVBAR-->

            <div class="row">
                <div class="col">
                    <nav class="navbar bg-light">
                        <div class="container-fluid">
                            <span class="navbar-brand">Lista de Usuário</span>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col">&nbsp;</div>
            </div>

            <!--TABELA-->
            <div class="row">
                <div class="col">
                    <table class="table">
                        <!--COLUNAS-->
                        <thead>
                            <tr>
                                <th scope="col">Email</th>
                                <th scope="col">Senha</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Bairro</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">CEP</th>
                            </tr>
                        </thead>

                        <!--DADOS-->
                        <tbody>
                        <?php
                            $controller = new controllerCadastro();
                            $resultado = $controller->listar(0);
                            for($i=0; $i<count($resultado); $i++){
                        ?>

                            <tr>
                                <td scope="row"><?php echo $resultado[$i]['email']; ?></td>
                                <td scope="row"><?php echo $resultado[$i]['senha']; ?></td>
                                <td scope="row"><?php echo $resultado[$i]['endereco']; ?></td>
                                <td scope="row"><?php echo $resultado[$i]['bairro']; ?></td>
                                <td scope="row"><?php echo $resultado[$i]['cidade']; ?></td>
                                <td scope="row"><?php echo $resultado[$i]['cep']; ?></td>
                                <td scope="row">
                                    <button type="button" class="btn btn-dark" style="width: 72px;" onclick="location.href='editar.php?id=<?php echo $resultado[$i]['id']; ?>'">Editar</button>
                                    <button type="button" class="btn btn-dark" style="width: 72px;" onclick="location.href='excluir.php?id=<?php echo $resultado[$i]['id']; ?>'">Excluir</button>
                                </td>
                            </tr>

                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--FIM DA TABELA-->

        </div>
    </body>
</html>





