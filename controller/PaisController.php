<?php
    if(isset($_REQUEST['inserir'])){
        
        $nome = $_POST['txNome'];
        $sigla = $_POST['txSigla'];

        echo $nome.' '.$sigla;
    }
?>