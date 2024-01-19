<?php
class Login {
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function logar(){
        if($this->email == "teste@gmail.com" and $this-> senha == "123456"){
            echo "Logado com sucesso";
        }
        else echo "Dados invalidos";
    }
}

$logar = new Login();
$logar->setEmail("teste@gmail.com");
$logar->setSenha("123456");
$logar->logar();

echo "<br>";

echo $logar->getEmail();