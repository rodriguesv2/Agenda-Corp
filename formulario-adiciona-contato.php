<?php require_once 'cabecalho.php';
require_once 'conecta.php';

$empresaDao = new EmpresaDao($conexao);
$empresas = $empresaDao->listaEmpresas();
?>

<div class="form-add">
    <form action="adiciona-contato.php" method="post">
    	<h1>Adicionar Contato</h1><br>
    	
    	<label>Nome:</label><br>
    	<input name="nome" type="text" placeholder="Insira o nome do contato"/><br>
    	
    	<label>Empresa:</label><br>
    	<select name="empresa_id">
    		<?php 
    		foreach ($empresas as $empresa):
    		?>
    			<option value="<?= $empresa[0]?>"><?= $empresa[1]?></option>
    		<?php endforeach;?>
    	</select><br>
    	
    	<label>Telefone(s):</label>
    	<button id="adiciona-campo-telefone">+</button>
    	<button id="subtrai-campo-telefone">-</button><br>
    	<div class="input-form-tel">
    		<input type="tel" name="telefone1" placeholder="(XX) XXXX-XXXX"/>
    	</div>
    	<br>
    	
    	<label>E-mail(s):</label>
    	<button id="adiciona-campo-email">+</button>
    	<button id="subtrai-campo-email">-</button><br>
    	<div class="input-form-email">
    		<input type="email" name="email1" placeholder="username@provider.com"/>
    	</div>
    	<br>
    	
    	<div>
    		<label for="privacidade">Privacidade:</label><br>
    		<input type="radio" name="privacidade" value="publico" checked="checked">Publico<br>
    		<input type="radio" name="privacidade" value="privado">Privado
    	</div>
    	
    	<input type="hidden" name="usuario_id" value="1"/><br>
    	
    	<input type="submit" value="Adicionar">
    </form>
</div>

<script src="js/formulario-adicionar.js"></script>

<?php require_once 'rodape.php';?>
