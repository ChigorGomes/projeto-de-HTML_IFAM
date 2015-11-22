<script>
function deletaCliente(){
	return confirm("deseja realmente excluir");
}
</script>

	  

   <form action ="ForConsultaCliente.php" method="post">
<table align="center">
<tr> <td colspan="3"> <strong>Formulario de Consulta de Clientes</strong> </td> </tr>
<tr>
<td>nome:</td> <td> <input type="text" name="nome" size="50"></td>
<td> <input type="submit" value="Buscar"> </td>
</tr>
</table>
<br><br>
<table width="80%" border="2px">
<tr>
<td>nome</td>
<td>email</td>
<td>endereco</td>
<td>telefone</td>
<td>cpf</td>
<td>cep</td>
<td>Acao</td>
</tr>




<?php
Include("conexaoBD.php");
try{
	 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $nome="";
	 if(isset($_POST) && !empty($_POST)){
		$nome = $_POST["nome"];
	 }
	 $sql="SELECT * FROM cliente WHERE nome LIKE? ORDER BY nome";
	 $stmt=$conn->prepare($sql);
	 $stmt->bindValue(1,'%'.$nome.'%');
	 $stmt-> execute();
	
	 if ($stmt){
		foreach ($stmt as $usr){
			echo"<tr>";
			echo"<td>".$usr["nome"]." </td> <td> ".$usr["email"]." </td> <td> ".$usr["endereco"]." </td>
			<td> ".$usr["telefone"]." </td> <td> ".$usr["cpf"]." </td><td> ".$usr["cep"]." </td>";
			echo"<td>";
			echo"<a href='FormAlteraCliente.php?id_cliente=".$usr["id_cliente"]."'>Alterar</a>";
			echo"<a href='FormDeletaCliente.php?id_cliente=".$usr["id_cliente"]."'onclick=' return 
			deletaCliente(".$usr["id_cliente"].")'>Excluir</a>";
			echo "</td>";
			echo"</tr>";
			
		 }
	  }
     }catch(Exception $e){
	  echo "Erro: ".$e->getMessage();
	
    }

?>

