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

        //ajustar o charset de comunicação entre aplicaão e banco de dados.
        mysqli_set_charset($con, 'utf-8');

        //verifica se houve erro de conexão
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
        }
    }
?>