<?php
include ("conexaoBD.php");
$idproduto= $_GET["idproduto"];
$sql= "SELECT * FROM produto WHERE idproduto = $idproduto";
$results = $conn-> query($sql);
$NomeProduto=""; $fornecedor=""; $preco="";
if($results){
   foreach($results as $usr){
   $NomeProduto=$usr["NomeProduto"];
   $fornecedor=$usr["fornecedor"];
   $preco=$usr["preco"];
  
  }
}
?>
<form action="EditaProduto.php" method="post" name="dados" onSubmit="return enviardados();">
<table>
<tr><td colspan="2">Formulario de alteraçao de cliente </td> </tr>
<tr><td>
<tr><td>NomeProduto:</tr></td>
<tr><td><input  name="txtNomeProduto"   type="text"    class="formbutton" id="tx_nome" size="52" maxlength="150" value="<?=$NomeProduto?>" ></td></tr>
<tr><td>Fornecedor:</tr></td>
<tr><td><input name="txtfornecedor" type="text" id="tx_email" size="52" maxlength="150" class="formbutton" value="<?=$fornecedor?>" ></td></tr>
<tr><td>Preco:
<tr><td><input name="txtpreco" type="txt" class="formbutton" id="tx_nome" size="52" maxlength="150" value="<?=$preco?>" ></td></tr>

<tr><td><input name="Submit" type="submit" value="Alterar"/><input name="Reset" type="reset"  value="Redefinir">
</tr>
</td>
</table>
<input type="hidden" name="txtidproduto" value="<?=$idproduto?>">
</form>




