<?php
 date_default_timezone_set('America/Sao_Paulo');

 define('BD_SERVIDOR', 'localhost');
 define('BD_USUARIO', 'root');
 define('BD_SENHA', '');
 define('BD_BANCO', 'bancophp');

 class BancoDados{

    private $mysqli;
    

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }

    public function setCadastro($email, $senha, $endereco, $bairro, $cidade, $estado, $cep){
        $stmt = $this->mysqli->prepare("INSERT INTO cadastro (`email`,`senha`,`endereco`,`bairro`, `cidade`, `estado`,`cep`) VALUES(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $email, $senha, $endereco, $bairro, $cidade, $estado, $cep);
        
        if( $stmt -> execute() == TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function getCadastro(){
        try{
            $stmt = $this->mysqli->query("SELECT * FROM cadastro;");
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista = array();
            $i = 0;
            foreach($lista as $l){
                $f_lista[$i]['email'] = $l['email'];
                $f_lista[$i]['senha'] = $l['senha'];
                $f_lista[$i]['endereco'] = $l['endereco'];
                $f_lista[$i]['bairro'] = $l['bairro'];
                $f_lista[$i]['cidade'] = $l['cidade'];
                $f_lista[$i]['estado'] = $l['estado'];
                $f_lista[$i]['cep'] = $l['cep'];
                $i++;
            }
            return $f_lista;
        }catch(Exception $e){
            echo "Ocorreu um erro ao tentar buscar todos!" . $e;
        }
    }
 }

?>