<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php 
error_reporting(E_ALL ^ E_NOTICE);

function carregaClasse($nomeDaClasse) {
    require_once("class/".$nomeDaClasse.".php");
}

spl_autoload_register("carregaClasse");

session_start();
?>

<html>
	<head>
		<title>Agenda Corporativa</title>
		<meta charset="utf-8">
		<link href="css/bootstrap.css" rel="stylesheet"/>
		<link href="css/agenda.css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	</head>
	<body>
		<div class="barra-superior">
			<div class="logo">
				<a href="index.php">Agenda Corporativa</a>
			</div>
				<ul>
					<li><a href="formulario-adiciona-contato.php">Adicionar Contato</a></li>
					<li><a href="lista-contato.php">Lista de contatos</a></li>
				</ul>
		</div>
