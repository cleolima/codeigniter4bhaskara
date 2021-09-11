<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edição</title>
</head>
<body>
	<?php echo form_open('user/recebe_dados')?>
	<label> Valor de A</label>
	<input type="text"  name="a" id="a">

	<label> Valor de B</label>
	<input type="text" name="b" id="b">

	<label> Valor de C</label>
	<input type="text" name="c" id="c">

	<input type="submit" value="Salvar" >


	<?php echo form_close()?>
	


</body>
</html>