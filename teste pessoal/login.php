<?php
  require_once("conexao.php");
  
    class FuncoesLogin{
    
    public function ValidaLogin(){
    // fazer depois do CriaUsuario
    }

    public function AdicionaUsuario(){
        $usuario = $_POST["nome"];
        $password = $_POST["senha"];
    
        $InsertUsuario = 'INSERT INTO "Usuarios"(usunome, password)
        VALUES ('.$usuario.','.$password.');';

        $resposta = pg_query(conexao(), $InsertUsuario);
    
         return $resposta;
    }
}