<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/SiteCRUD/model/cadastro.php");

class controllerCadastro{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        if (isset($_GET['funcao']) && $_GET['funcao'] == "cadastro") {
            $this->incluir();
        }elseif (isset($_GET['funcao']) && $_GET['funcao'] == "editar") {
            $this->editar($_GET['id']);
        }
            
        
    }

    private function incluir(){
        $this->cadastro->setEmail($_POST['txtEmail']);
        $this->cadastro->setSenha($_POST['txtSenha']);
        $this->cadastro->setEndereco($_POST['txtEndereco']);
        $this->cadastro->setBairro($_POST['txtBairro']);
        $this->cadastro->setCidade($_POST['txtCidade']);
        $this->cadastro->setEstado($_POST['txtEstado']);
        $this->cadastro->setCep($_POST['txtCep']);

        $result = $this->cadastro->incluir();

        if($result >= 1){
            echo "<script> alert('Registro concluído!'); document.location='../index.php' </script>";
        }else{
            echo "<script> alert('Falha ao realizar o registro'); </script>";
        }
    }

    public function listar($id){
        return $result = $this->cadastro->listar($id);
    }

    private function editar($id){
        $this->cadastro->setId($id);
        $this->cadastro->setEmail($_POST['txtEmail']);
        $this->cadastro->setSenha($_POST['txtSenha']);
        $this->cadastro->setEndereco($_POST['txtEndereco']);
        $this->cadastro->setBairro($_POST['txtBairro']);
        $this->cadastro->setCidade($_POST['txtCidade']);
        $this->cadastro->setEstado($_POST['txtEstado']);
        $this->cadastro->setCep($_POST['txtCep']);

        $result = $this->cadastro->editar();

        if($result >= 1){
            echo "<script> alert('Registro alterado com sucesso!'); document.location='../consulta.php' </script>";
        }else{
            echo "<script>  alert('Erro ao alterar o registro'); </script>";
        }
    }

    public function excluir($id){
        $result = $this->cadastro->excluir($id);
        if($result >= 1){
            echo "<script> alert('Registro excluido com sucesso!'); document.location='consulta.php' </script>";
        }else{
            echo "<script>  alert('Erro ao excluir o registro'); </script>";
        }
    }
}

new controllerCadastro();


?>