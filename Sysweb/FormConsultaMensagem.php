<script>
function deletaMensagem(){
	return confirm("deseja realmente excluir");
}
</script>

<form action ="formConsultaMensagem.php" method="post">
<table align="center">
<tr> <td colspan="3"> <strong>Formulario de Consulta de Usuarios</strong> </td> </tr>
<tr>
<td>nome:</td> <td> <input type="text" name="tipo" size="50"></td>
<td> <input type="submit" value="Buscar"> </td>
</tr>
</table>
<br><br>
<table width="80%" border="2px">
<tr>
<td>Tipo</td>
<td>Mensagem</td>
<td>Acao</td>
</tr>


<?php
Include("conexaoBD.php");
try{
	 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $tipo="";
	 if(isset($_POST) && !empty($_POST)){
		$tipo = $_POST["tipo"];
	 }
	 $sql="SELECT * FROM mensagem WHERE tipo LIKE? ORDER BY tipo";
	 $stmt=$conn->prepare($sql);
	 $stmt->bindValue(1,'%'.$tipo.'%');
	 $stmt-> execute();
	
	 if ($stmt){
		foreach ($stmt as $usr){
			echo"<tr>";
			echo"<td>".$usr["tipo"]." </td> <td> ".$usr["mensagem"]." </td>" ;
			echo"<td>";
			echo"<a href='FormEditaMensagem.php?id_mensagem=".$usr["id_mensagem"]."'>Alterar</a>";
			echo"<a href='formDeletaMensagem.php?id_mensagem=".$usr["id_mensagem"]."'onclick=' return 
			deletaMensagem(".$usr["id_mensagem"].")'>Excluir</a>";
			echo "</td>";
			echo"</tr>";
			
		 }
	  }
     }catch(Exception $e){
	  echo "Erro: ".$e->getMessage();
	
    }

?>

