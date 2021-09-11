<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style >
		.tabela, .tabela td, .tabela tr{
			border: 1px solid;
		}
	</style>
</head>
<body>
	<h2><?php echo $titulo ?></h2>
	<?php echo anchor(base_url('calculos/formInsert'), 'Novo usuario') ?>
	<table class="tabela">
		<tr>
		<td>Id</td>
		<td>Valor de A</td>
		<td>Valor de B</td>
		<td>Valor de C</td>
		<td>Valor de Delta</td>
		<td>Valor de x1</td>
		<td>Valor de x2</td>
		<td>Ação</td>
		
		</tr>
		<?php foreach ($tabela as $tabela): ?>
		<tr>
		<td><?php echo $tabela['id'] ?></td>	
		<td><?php echo $tabela['a'] ?></td>
		<td><?php echo $tabela['b']?></td>
		<td><?php echo $tabela['c'] ?></td>	
		<td><?php echo $tabela['delta'] ?></td>	
		<td><?php echo $tabela['x1'] ?></td>	
		<td><?php echo $tabela['x2']?></td>
		<td>
			<?php echo anchor('calculos/Update/' .$tabela['id'], 'Editar') ?>
			-
			<?php echo anchor('calculos/Delete/' .$tabela['id'], 'Excluir') ?>

		</td>
		</tr>
		<?php endforeach ?>		

	</table>

</body>
</html>


