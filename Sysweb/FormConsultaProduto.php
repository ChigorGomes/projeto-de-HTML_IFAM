<script>
function deletaCliente(){
	return confirm("deseja realmente excluir");
}
</script>

	  

   <form action ="FormConsultaProduto.php" method="post">
<table align="center">
<tr> <td colspan="3"> <strong>Formulario de Consulta de produtos</strong> </td> </tr>
<tr>
<td>nome:</td> <td> <input type="text" name="NomeProduto" size="50"></td>
<td> <input type="submit" value="Buscar"> </td>
</tr>
</table>
<br><br>
<table width="80%" border="2px">
<tr>
<td>NomeProduto</td>
<td>fornecedor</td>
<td>preco</td>
<td>Acao</td>
</tr>




<?php
Include("conexaoBD.php");
try{
	 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $NomeProduto="";
	 if(isset($_POST) && !empty($_POST)){
		$NomeProduto = $_POST["NomeProduto"];
	 }
	 $sql="SELECT * FROM produto WHERE NomeProduto LIKE? ORDER BY NomeProduto";
	 $stmt=$conn->prepare($sql);
	 $stmt->bindValue(1,'%'.$NomeProduto.'%');
	 $stmt-> execute();
	
	 if ($stmt){
		foreach ($stmt as $usr){
			echo"<tr>";
			echo"<td>".$usr["NomeProduto"]." </td> <td> ".$usr["fornecedor"]." </td> <td> ".$usr["preco"]."</td>";
			echo"<td>";
			echo"<a href='FormAlteraProduto.php?idproduto=".$usr["idproduto"]."'>Alterar</a>";
			echo"<a href='DeletaProduto.php?idproduto=".$usr["idproduto"]."'onclick=' return 
			deletaCliente(".$usr["idproduto"].")'>Excluir</a>";
			echo "</td>";
			echo"</tr>";
			
		 }
	  }
     }catch(Exception $e){
	  echo "Erro: ".$e->getMessage();
	
    }

?>

