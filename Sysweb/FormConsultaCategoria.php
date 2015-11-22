<script>
function deletaMensagem(){
	return confirm("deseja realmente excluir");
}
</script>

<form action ="FormConsultaCategoria.php" method="post">
<table align="center">
<tr> <td colspan="3"> <strong>Formulario de Consulta de Categoria</strong> </td> </tr>
<tr>
<td>nome:</td> <td> <input type="text" name="nomeCategoria" size="50"></td>
<td> <input type="submit" value="Buscar"> </td>
</tr>
</table>
<br><br>
<table width="80%" border="2px">
<tr>
<td>nomeCategoria</td>
<td>descricao</td>
<td>figura</td>
<td>Acao</td>
</tr>


<?php
Include("conexaoBD.php");
try{
	 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $nomeCategoria="";
	 if(isset($_POST) && !empty($_POST)){
		$nomeCategoria = $_POST["nomeCategoria"];
	 }
	 $sql="SELECT * FROM categoria WHERE nomeCategoria LIKE? ORDER BY nomeCategoria";
	 $stmt=$conn->prepare($sql);
	 $stmt->bindValue(1,'%'.$nomeCategoria.'%');
	 $stmt-> execute();
	
	 if ($stmt){
		foreach ($stmt as $usr){
			echo"<tr>";
			echo"<td>".$usr["nomeCategoria"]." </td> <td> ".$usr["descricao"]." </td> <td> ".$usr["figura"]." </td>";
			echo"<td>";
			echo"<a href='FormEditaCategoria.php?id_categoria=".$usr["id_categoria"]."'>Alterar</a>";
			echo"<a href='formDeletaCategoria.php?id_categoria=".$usr["id_categoria"]."'onclick=' return 
			deletaCategoria(".$usr["id_categoria"].")'>Excluir</a>";
			echo "</td>";
			echo"</tr>";
			
		 }
	  }
     }catch(Exception $e){
	  echo "Erro: ".$e->getMessage();
	
    }

?>

