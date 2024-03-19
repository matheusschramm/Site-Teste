<?php
  require_once("conexao.php");
  
  
    
  function ValidaLogin(){
    // fazer depois do CriaUsuario
    }

   
     if(isset($_POST["senha"]) && isset($_POST["nome"])){
      $senha = $_POST["senha"];
      $usuario = $_POST["nome"];
     }
    

  function AdicionaUsuario(){
  
    // $usuario = $dados[1];
    // $password = $dados[2];
    $usuario = $_POST["nome"];
    $senha = $_POST["senha"];
    
    $query = 'INSERT INTO "Usuarios" (usunome, password) VALUES ('.$usuario.','.$senha.');';

    $resposta = pg_query(conexao(), $query);

    // if($resposta){
    //   $resposta = 'deu certo';
    // }else{
    //   $resposta = 'deu algum problema';
    // }
    
    //  echo json_encode($resposta);
    echo json_encode($resposta);
     
    }
  
  AdicionaUsuario();