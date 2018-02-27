<?php require_once 'cabecalho.php';
require_once 'conecta.php';?>

<div class="lista-contatos">
	<table>
    	<thead>
    		<tr>
    			<th>Nome</th><th>Empresa</th><th>Telefone</th><th>E-mail</th>
    		</tr>	
    	</thead>
    	<tbody>
            <?php $contatoDao = new ContatoDao($conexao);
                $linhas = $contatoDao->listaContato();
                foreach ($linhas as $linha):?>
                		<tr>
                			<td><?= $linha[1]?></td>
                			<td><?= $linha[2]?></td>
                			<td><?= $linha[3]?></td>
                			<td><?= $linha[4]?></td>
                		</tr>
                <?php endforeach;?>
    	</tbody>
    </table>
</div>

<?php require_once 'rodape.php';?>
