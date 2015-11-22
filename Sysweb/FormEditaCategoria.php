<?php
include ("conexaoBD.php");
$idcategoria= $_GET["id_categoria"];
$sql= "SELECT * FROM categoria WHERE id_categoria = $idcategoria";
$results = $conn-> query($sql);
$nomeCategoria=""; $descricao="";$figura="";
if($results){
   foreach($results as $usr){
   $nomeCategoria=$usr["nomeCategoria"];
   $descricao=$usr["descricao"];
   $figura=$usr["figura"];
  
  }
}
?>

<form action="FormEditaC.php" method="post">
<table>
<tr><td colspan="2">Formulario de alteraçao de categoria </td> </tr>
<tr><td>nomeCategoria:
<tr><td><input type="text" name="txtnomeCategoria"  value="<?=$nomeCategoria?>" > </td></tr>
<tr><td>descricao:</tr></td>
<tr><td><input name="txtdescricao" type="text" id="tx_email" size="52" maxlength="150" class="formbutton" value="<?=$descricao?>"></td></tr>
<tr><td>figura:</tr></td>
<tr><td><input name="txtfigura" type="text" id="tx_email" size="52" maxlength="150" class="formbutton" value="<?=$figura?>"></td></tr>
<tr><td><input name="Submit" type="submit" value="alterar"/><input type="button"  value="voltar" onclick="history.back0">
</td>
</tr>
</table>
<input type="hidden" name="txtidcategoria" value="<?=$idcategoria?>">
</form>
