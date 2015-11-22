<?php
include ("conexaoBD.php");
$idmensagem= $_GET["id_mensagem"];
$sql= "SELECT * FROM mensagem WHERE id_mensagem = $idmensagem";
$results = $conn-> query($sql);
$tipo=""; $mensagem="";
if($results){
   foreach($results as $usr){
   $tipo=$usr["tipo"];
   $mensagem=$usr["mensagem"];
  
  }
}
?>

<form action="FormEditarM.php" method="post">
<table>
<tr><td colspan="2">Formulario de alteraçao de mensagem </td> </tr>
<tr><td>tipo:
<tr><td><input type="text" name="txttipo"  value="<?=$tipo?>" > </td></tr>
<tr><td>mensagem:</tr></td>
<tr><td><input name="txtmensagem" type="text" id="tx_email" size="52" maxlength="150" class="formbutton" value="<?=$mensagem?>"></td></tr>

<tr><td><input name="Submit" type="submit" value="alterar"/><input type="button"  value="voltar" onclick="history.back0">
</td>
</tr>
</table>
<input type="hidden" name="txtidmensagem" value="<?=$idmensagem?>">
</form>
