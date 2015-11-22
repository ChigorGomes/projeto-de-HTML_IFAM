<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="cadCadastro.php" method="post" >
		<table align="center" border="1">
			<th colspan="2">Cadastrar</th>
			<tr>
				<td>
					<label for="txtNome">Nome:</label>
				</td>
				<td>
					<input name="txtNome" id="txtNome" type="text" placeholder="fulano de tal" size="50">
				</td>
			<tr>
				<td>
					<label for="txtEmail">Email:</label>
				</td>
				<td>
					<input name="txtEmail" id="txtEmail" type="email" placeholder="fulano@.com" size="50">
				</td>
			</tr>
			<tr>
				<td>
					<label for="txtSenha">Senha:</label>
				</td>
				<td>
					<input  name="txtSenha" id="txtSenha" type="password" size="50">
				</td>
			</tr>
			<tr>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Cadastrar">
				</td>
				<td>
					<input type="reset" value="Limpar">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>