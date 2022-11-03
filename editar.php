<?php
require_once("controller/cadastroController.php");
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

            <!--TITULO-->
            <div class="row">
                <div class="col">
                    <nav class="navbar bg-light">
                        <div class="container-fluid">
                            <span class="navbar-brand">Editar dados do Usuário</span>
                        </div>
                    </nav>
                </div>
            </div>
            <!--FIM DO TITULO-->

            <!--ESPAÇO-->
            <div class="row">
                <div class="col">&nbsp;</div>
            </div>

            
            <?php
                $controller = new cadastroController();
                $resultado = $controller->listar($_GET['id']);
            ?>
            <!--FORMULARIO-->
            <form class="row g-3" method="post" action="controller/cadastroController.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>">
                <!--EMAIL-->
                <div class="col-md-6">
                    <label for="lblEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" value="<?php echo $resultado[0]['email']; ?>">
                </div>
                <!--SENHA-->
                <div class="col-md-6">
                    <label for="lblSenha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="txtSenha" name="txtSenha" value="<?php echo $resultado[0]['senha']; ?>">
                </div>
                <!--ENDEREÇO-->
                <div class="col-12">
                    <label for="lblEndereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="txtEndereco" name="txtEndereco" value="<?php echo $resultado[0]['endereco']; ?>">
                </div>
                <!--BAIRRO-->
                <div class="col-6">
                    <label for="lblBairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="txtBairro" name="txtBairro" value="<?php echo $resultado[0]['bairro']; ?>">
               </div>
                <!--CEP-->
                <div class="col-6">
                    <label for="lblCep" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="txtCep" name="txtCep" value="<?php echo $resultado[0]['cep']; ?>">
                </div>
                <!--CIDADE-->
                <div class="col-md-6">
                    <label for="lblCidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="txtCidade" name="txtCidade" value="<?php echo $resultado[0]['cidade']; ?>">
                </div>
                <!--ESTADO-->
                <div class="col-md-4">
                    <label for="lblestado" class="form-label">Estado</label>
                    <select id="txtestado" class="form-select" name="txtestado">
                        <option selected>Escolha...</option>
                        <option <?php if($resultado[0]['estado'] == "Acre"){ echo "selected"; } ?>>Acre</option>
                        <option <?php if($resultado[0]['estado'] == "Alagoas"){ echo "selected"; } ?>>Alagoas</option>
                        <option <?php if($resultado[0]['estado'] == "Amapá"){ echo "selected"; } ?>>Amapá</option>
                        <option <?php if($resultado[0]['estado'] == "Amazonas"){ echo "selected"; } ?>>Amazonas</option>
                        <option <?php if($resultado[0]['estado'] == "Bahia"){ echo "selected"; } ?>>Bahia</option>
                        <option <?php if($resultado[0]['estado'] == "Ceará"){ echo "selected"; } ?>>Ceará</option>
                        <option <?php if($resultado[0]['estado'] == "Espírito Santo"){ echo "selected"; } ?>>Espírito Santo</option>
                        <option <?php if($resultado[0]['estado'] == "Goiás"){ echo "selected"; } ?>>Goiás</option>
                        <option <?php if($resultado[0]['estado'] == "Maranhão"){ echo "selected"; } ?>>Maranhão</option>
                        <option <?php if($resultado[0]['estado'] == "Mato Grosso"){ echo "selected"; } ?>>Mato Grosso</option>
                        <option <?php if($resultado[0]['estado'] == "Mato Grosso do Sul"){ echo "selected"; } ?>>Mato Grosso do Sul</option>
                        <option <?php if($resultado[0]['estado'] == "Minas Gerais"){ echo "selected"; } ?>>Minas Gerais</option>
                        <option <?php if($resultado[0]['estado'] == "Pará"){ echo "selected"; } ?>>Pará</option>
                        <option <?php if($resultado[0]['estado'] == "Paraíba"){ echo "selected"; } ?>>Paraíba</option>
                        <option <?php if($resultado[0]['estado'] == "Paraná"){ echo "selected"; } ?>>Paraná</option>
                        <option <?php if($resultado[0]['estado'] == "Pernambuco"){ echo "selected"; } ?>>Pernambuco</option>
                        <option <?php if($resultado[0]['estado'] == "Piauí"){ echo "selected"; } ?>>Piauí</option>
                        <option <?php if($resultado[0]['estado'] == "Rio de Janeiro"){ echo "selected"; } ?>>Rio de Janeiro</option>
                        <option <?php if($resultado[0]['estado'] == "Rio Grande do Norte"){ echo "selected"; } ?>>Rio Grande do Norte</option>
                        <option <?php if($resultado[0]['estado'] == "Rio Grande do Sul"){ echo "selected"; } ?>>Rio Grande do Sul</option>
                        <option <?php if($resultado[0]['estado'] == "Rondônia"){ echo "selected"; } ?>>Rondônia</option>
                        <option <?php if($resultado[0]['estado'] == "Roraima"){ echo "selected"; } ?>>Roraima</option>
                        <option <?php if($resultado[0]['estado'] == "Santa Catarina"){ echo "selected"; } ?>>Santa Catarina</option>
                        <option <?php if($resultado[0]['estado'] == "São Paulo"){ echo "selected"; } ?>>São Paulo</option>
                        <option <?php if($resultado[0]['estado'] == "Sergipe"){ echo "selected"; } ?>>Sergipe</option>
                        <option <?php if($resultado[0]['estado'] == "Tocantins"){ echo "selected"; } ?>>Tocantins</option>
                </select>
            </div>

            <!--ESPAÇO-->
            <div class="row">
                <div class="col">&nbsp;</div>
            </div>
            <!--BOTAO-->
            <div class="col-12">
                <button type="submit" class="btn btn-dark"> Editar </button>
            </div>
            </form>
            <!--FIM DO FORMULARIO-->
        </div>
    </body>
</html>