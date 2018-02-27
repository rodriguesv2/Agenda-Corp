<?php require_once("cabecalho.php");

session_start();
?>
	<h1>Bem vindo!</h1>
	
	<?php if(!isset($_SESSION['email'])){?>
	<div>
		<h4><?= $_SESSION['danger']?></h4>
		<?php unset($_SESSION['danger'])?>
		
		<h2>Login</h2>
		<form action="logica-usuario.php" method="post">
			<label for="email">Email:</label>
			<input type="email" name="email" placeholder="username@provider.com"><br>
			
			<label for="senha">Senha:</label>
			<input type="password" name="senha"><br>
			
			<input type="submit" value="Logar">
		</form>
	</div>
	<?php }else{?>
        	<h3><?= $_SESSION['success']?></h3>
        	<a href='logoff.php'>Deslogar</a>
        	<?php //unset($_SESSION['success']);
    }?>
	
<?php require_once("rodape.php")?>