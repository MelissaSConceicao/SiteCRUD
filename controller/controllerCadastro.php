<?php

require_once("../model/cadastro.php");

class ControllerCadastro{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    public function incluir(){
        $this->cadastro->setEmail($_POST['txtEmail']);
        $this->cadastro->setSenha($_POST['txtSenha']);
        $this->cadastro->setEndereco($_POST['txtEndereco']);
        $this->cadastro->setBairro($_POST['txtBairro']);
        $this->cadastro->setCep($_POST['txtCep']);
        $this->cadastro->setCidade($_POST['txtCidade']);
        $this->cadastro->setEstado($_POST['txtEstado']);

        $res = $this->cadastro->incluir();
        if($res >= 1){
            echo "<script> alert('Registro concluído!'); document.location='../index.php' </script>";
        }else{
            echo "<script>  alert('Falha ao realizar o registro'); </script>";
        }
    }
}

new controllerCadastro();


?>