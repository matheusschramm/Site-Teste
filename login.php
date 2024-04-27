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
    $data = json_decode(file_get_contents("php://input"), true);
    $usuario = isset($data['nome']) ? $data['nome'] : null;
    $senha = isset($data['senha']) ? $data['senha'] : null;

    if ($usuario == null || $senha == null) {
      // echo json_encode("Por favor, preencha os campos antes de enviar");
    $resposta = "Campos vazios";
    return;
  }

    $sql= 'SELECT usunome FROM "Usuarios"';
    $result = pg_query(conexao(), $sql);

    
    while($row = pg_fetch_assoc($result)){
      if($row["usunome"] == $usuario){
        echo json_encode("Nome de usuario ja esta sendo usado!");
        return;
      }
    }

    $query = 'INSERT INTO "public"."Usuarios" ("usunome", "password") VALUES ($1, $2)';
    // Define os valores dos parâmetros
    $params = array($usuario, $senha);
    // Executa a consulta com parâmetros preparados
    $resposta = pg_query_params(conexao(), $query, $params);
    

      if($resposta){
      echo json_encode("Usuario incluido com sucesso");
      return;      
      }else{
      echo json_encode("deu algum erro");
      return;
      }     
    }

    if($data = json_decode(file_get_contents("php://input"), true)){
      AdicionaUsuario();
    }

