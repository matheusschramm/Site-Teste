<?php

 function conexao(){
    $host = 'aws-0-us-west-1.pooler.supabase.com';
    $port = '5432';
    $database = 'postgres';
    $user = 'postgres.junnzyyfvrscsprmtden';
    $password = '?*9M%vrJ!Jhiu87';

    $conexao = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");
    return $conexao;
 }

 conexao();

//  user=postgres.junnzyyfvrscsprmtden 
// password=[YOUR-PASSWORD]
//  host=aws-0-us-west-1.pooler.supabase.com 
// port=5432 
// dbname=postgres
