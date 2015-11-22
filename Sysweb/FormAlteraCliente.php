<?php
include ("conexaoBD.php");
$idcliente= $_GET["id_cliente"];
$sql= "SELECT * FROM cliente WHERE id_cliente = $idcliente";
$results = $conn-> query($sql);
$nome=""; $email=""; $endereco="";$telefone="";$cpf="";$cep="";
if($results){
   foreach($results as $usr){
   $nome=$usr["nome"];
   $email=$usr["email"];
   $endereco=$usr["endereco"];
   $telefone=$usr["telefone"];
   $cpf=$usr["cpf"];
   $cep=$usr["cep"];
  }
}
?>
<form action="editaCliente.php" method="post" name="dados" onSubmit="return enviardados();">
<table>
<tr><td colspan="2">Formulario de alteraçao de cliente </td> </tr>
<tr><td>
<tr><td>Nome:</tr></td>
<tr><td><input  name="txtnome"   type="text"    class="formbutton" id="tx_nome" size="52" maxlength="150" value="<?=$nome?>" ></td></tr>
<tr><td>Email:</tr></td>
<tr><td><input name="txtemail" type="text" id="tx_email" size="52" maxlength="150" class="formbutton" value="<?=$email?>" ></td></tr>
<tr><td>Endereco:
<tr><td><input name="txtendereco" type="txt" class="formbutton" id="tx_nome" size="52" maxlength="150" value="<?=$endereco?>" ></td></tr>
<tr><td>Telefone:</tr></td>
<tr><td><input name="txttelefone" type="text" id="tx_email" size="52" maxlength="150" class="formbutton" value="<?=$telefone?>" ></td></tr>
<tr><td>Cpf:</tr></td>
<tr><td><input name="txtcpf" type="text" id="tx_email" size="52" maxlength="150" class="formbutton" value="<?=$cpf?>" ></td></tr>
<tr><td>Cep:</tr></td>
<tr><td><input name="txtcep" type="text" id="tx_email" size="52" maxlength="150" class="formbutton" value="<?=$cep?>" ></td></tr>
<tr><td><input name="Submit" type="submit" value="Alterar"/><input name="Reset" type="reset"  value="Redefinir">
</tr>
</td>
</table>
<input type="hidden" name="txtidcliente" value="<?=$idcliente?>">
</form>




