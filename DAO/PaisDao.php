<?php
include_once'conexao.php';
    class PaisDao{
        public static function inserir($pais){
            $sql = "INSERT INTO pais (nome, sigla) VALUES"
            ."('".$pais ->getNome()."');";
            Conexao::executar($sql);
        }
    }
?>