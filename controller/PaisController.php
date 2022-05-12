<?php
include_once'../model/PaisModel.php';
include_once'../DAO/PaisDao.php';

    if(isset($_REQUEST['inserir'])){
        
        $nome = $_POST['txNome'];
        $sigla = $_POST['txSigla'];

        $pais = new Pais($nome, $sigla);

        PaisDao::inserir($pais);

        echo $nome.' '.$sigla;
    }
?>