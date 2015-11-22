
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cliente</title>
      <link rel="stylesheet" type="text/css" href="../css/estilo1.css">
      <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
      <script language="javascript" src="java/formulario.js"> </script>
              
</head>
	  
 <body>
<form action="CadastroCliente.php" method="post" name="dados" onSubmit="return enviardados();">
<table>
<tr> <td colspan="3"> Formulario de Consulta de Clientes </td> </tr>

<tr><td>
<tr><td>Nome:</tr></td>
<tr><td><input  name="txtnome"   type="text" class="formbutton" id="tx_nome" size="52" maxlength="150"></td></tr>
<tr><td>Email:</tr></td>
<tr><td><input name="txtemail" type="text" id="tx_email" size="52" maxlength="150" class="formbutton"></td></tr>
<tr><td>Endereco:
<tr><td><input name="txtendereco" type="txt" class="formbutton" id="tx_nome" size="52" maxlength="150"></td></tr>
<tr><td>Telefone:</tr></td>
<tr><td><input name="txttelefone" type="text" id="tx_email" size="52" maxlength="150" class="formbutton"></td></tr>
<tr><td>Cpf:</tr></td>
<tr><td><input name="txtcpf" type="text" id="tx_email" size="52" maxlength="150" class="formbutton"></td></tr>
<tr><td>Cep:</tr></td>
<tr><td><input name="txtcep" type="text" id="tx_email" size="52" maxlength="150" class="formbutton"></td></tr>
<tr><td><input name="Submit" type="submit" value="cadastrar"/><input name="Reset" type="reset"  value="Redefinir">
</tr></td>
</table>
</form>


</body>

</html>