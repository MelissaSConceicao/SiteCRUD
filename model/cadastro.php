<?php

require_once("bancoDados.php");

class Cadastro extends BancoDados{

    private $email;
    private $senha;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    public function setEmail($email){
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }


    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function getCep(){
        return $this->cep;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function incluir(){
        return $this->setCadastro($this->getEmail(), $this->getSenha(), $this->getEndereco(), $this->getBairro(), $this->getCep(), $this->getCidade(), $this->getEstado());
    }
}


?>