<?php 
   if(isset($_GET['usuario']) && $_GET['usuario'] != ''){
    $novousuario = [];

    $novousuario['usuario'] = $_GET['usuario'];

    if(isset($_GET['senha'])){
        $novousuario['senha'] = $_GET['senha'];
    }else{
        $novousuario['senha'] = '';
    }

    if(isset($_GET['administrador'])){
        $novousuario['administrador'] = $_GET['administrador'];
    }else{
        $novousuario['administrador'] = 'não';
    }
}

include "conexao.php";

if(isset($novousuario)){
    $sqlInserir = "INSERT INTO tb_usuario(
        usuario, senha, administrador
    ) VALUES(
        '{$novousuario['usuario']}',
        '{$novousuario['senha']}',
        '{$novousuario['administrador']}'
    );";

    mysqli_query($conexao, $sqlInserir);
}

include "template.php";
?> 