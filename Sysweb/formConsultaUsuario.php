<script>
function deletaUsuario(){
	return confirm("deseja realmente excluir");
}
</script>

<form action ="formConsultaUsuario.php" method="post">
<table align="center">
<tr> <td colspan="3"> <strong>Formulario de Consulta de Usuarios</strong> </td> </tr>
<tr>
<td>nome:</td> <td> <input type="text" name="nome" size="50"></td>
<td> <input type="submit" value="Buscar"> </td>
</tr>
</table>
<br><br>
<table width="80%" border="2px">
<tr>
<td>nome</td>
<td>login</td>
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
	 $sql="SELECT * FROM ADMINISTRADOR WHERE nome LIKE? ORDER BY nome";
	 $stmt=$conn->prepare($sql);
	 $stmt->bindValue(1,'%'.$nome.'%');
	 $stmt-> execute();
	
	 if ($stmt){
		foreach ($stmt as $usr){
			echo"<tr>";
			echo"<td>".$usr["nome"]." </td> <td> ".$usr["login"]." </td>" ;
			echo"<td>";
			echo"<a href='FormEditaUsuario.php?id_administrador=".$usr["id_administrador"]."'>Alterar</a>";
			echo"<a href='formDeletaUsuario.php?id_administrador=".$usr["id_administrador"]."'onclick=' return 
			deletaUsuario(".$usr["id_administrador"].")'>Excluir</a>";
			echo "</td>";
			echo"</tr>";
			
		 }
	  }
     }catch(Exception $e){
	  echo "Erro: ".$e->getMessage();
	
    }

?>

