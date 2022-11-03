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
                
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">   
                                <span class="navbar-toggler-icon"></span>
                                
                                </button>
                                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                        <ul class="navbar-nav">
                                            <li>
                                                <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="consulta.php">Consultar</a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                        </nav>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col">
                        <nav class="navbar bg-light">
                            <div class="container-fluid">
                            <span class="navbar-brand">Cadastro de Usuário</span>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col">&nbsp;</div>
                </div>

                <div class="row">
                    <div class="col">

                        <form class="row g-3" method="post" action="controller/controllerCadastro.php?funcao=cadastro">
                                <div class="col-md-6">
                                    <label for="lblEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="txtEmail" name="txtEmail">
                                </div>

                            <div class="col-md-6">
                                <label for="lblSenha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="txtSenha" name="txtSenha" >
                            </div>

                            <div class="col-12">
                                <label for="lblEndereco" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="txtEndereco" name="txtEndereco">
                            </div>

                            <div class="col-6">
                                <label for="lblBairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" id="txtBairro" name="txtBairro">
                            </div>

                            <div class="col-6">
                                <label for="lblCep" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="txtCep" name="txtCep">
                            </div>

                            <div class="col-md-6">
                                <label for="lblCidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="txtCidade" name="txtCidade">
                            </div>

                            <div class="col-md-4">
                                <label for="lblEstado" class="form-label">Estado</label>
                                <select id="txtEstado" class="form-select" name="txtEstado">
                                    <option selected>Escolha...</option>
                                    <option>Acre</option>
                                    <option>Alagoas</option>
                                    <option>Amapá</option>
                                    <option>Amazonas</option>
                                    <option>Bahia</option>
                                    <option>Ceará</option>
                                    <option>Espírito Santo</option>
                                    <option>Goiás</option>
                                    <option>Maranhão</option>
                                    <option>Mato Grosso</option>
                                    <option>Mato Grosso Sul</option>
                                    <option>Minas Gerais</option>
                                    <option>Pará</option>
                                    <option>Paraíba</option>
                                    <option>Paraná</option>
                                    <option>Pernambuco</option>
                                    <option>Piauí</option>
                                    <option>Rio de Janeiro</option>
                                    <option>Rio Grande do Norte</option>
                                    <option>Rio Grande do Sul</option>
                                    <option>Rondônia</option>
                                    <option>Roraima</option>
                                    <option>Santa Catarina</option>
                                    <option>São Paulo</option>
                                    <option>Sergipe</option>
                                    <option>Tocantins</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col">&nbsp;</div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-dark">Cadastrar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </body>
</html>