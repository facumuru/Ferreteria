<?php

$id_usuari_get = $_GET['id'];

$sql_usuarios= "SELECT * FROM tb_usuarios where id_usuario = '$id_usuari_get'";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach($usuarios_datos as $usuarios_dato){
    $nombres = $usuarios_dato['nombres'];
    $email = $usuarios_dato['email'];

}