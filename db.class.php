<?php
    //host
    private $host = 'localhost';

    //usuario
    private $usuario = 'root';

    //senha
    private $senha = '';

    //banco
    private $database = 'twetter_clone';

    public function conecta_mysql(){

        //cria a conexao
        $con = mysqli_connect(
            $this->host,
            $this->usuario,
            $this->senha,
            $this->database
        );
    }
?>