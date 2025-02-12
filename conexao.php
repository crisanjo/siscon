<?php

class Conect{
    
 public function conectaPG(){
    $servidor = "090bfeb7ef2c_testes-docker.postgres";
    $porta = 5432;
    $bancoDeDados = "sisgef";
    $usuario = "testes";
    $senha = "testes123456";

    $conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados user=$usuario password=$senha") or die('Could not connect: ' . pg_last_error());
    if(!$conexao) {
        die("Não foi possível se conectar ao banco de dados.");
    }
    return $conexao;
 }

 public function conectaPGremoto(){
    $servidor = "10.4.50.242";
    $porta = 5432;
    $bancoDeDados = "sisorion";
    $usuario = "sysz";
    $senha = 'CxJ@XhiYFNG$poA';
    
    $conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados user=$usuario password=$senha") or die('Could not connect: ' . pg_last_error());
    if(!$conexao) {
        die("Não foi possível se conectar ao banco de dados.");
    }
    return $conexao;
 }
 
}
 
?>