<?php require_once 'conecta.php';
require_once 'cabecalho.php';

$usuarioDao = new UsuarioDao();
$usuario = new Usuario();

$usuario->setEmail($_POST['email']);
$usuario->setSenha(md5($_POST['senha']));

$logado = $usuarioDao->buscarUsuario($conexao, $usuario);

if($logado == null){
    $_SESSION['danger'] = 'Usuario ou senha invalidos';
}else{
    $_SESSION['success'] = "Usuario ".$logado." logado";
    $_SESSION['email'] = $logado;
}

header('Location: index.php');

die();