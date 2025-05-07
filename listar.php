<html> 
<head> <title>Lista de Clientes</title></head> 
<body> 
<h2 align="center">Lista de Clientes</h2><hr> 
<div align="center"> 
<center>
<table border"1" cellpadding="0" cellspacing="0" width="90%"> 
<tr> 
<td width="10%" bgcolor="#EEEEEE" align="center"> 
<p align="center"><b> 
<a href="listar.php?ordem=cli_codigo">Código</a></b></td> 
<td width="25%" bgcolor="#EEEEEE" align="center"><b> 
<a href="listar.php?ordem=cli_nome">Nome</a></b></td> 
<td width="40%" bgcolor="#EEEEEE" align="center"><b> 
<a href="listar.php?ordem=cli_rg">RG</a></b></td> 
<td width="14%" bgcolor="#EEEEEE" align="center"><b> 
<a href="listar.php?ordem=cli_cpf">CPF</a></b></td> 
<td width="11%" bgcolor="#EEEEEE" align="center"><b> 
</td> 
</tr>
<?php 
require_once "conecta.php"; 
if (isset($_GET["ordem"])) 
$ordem=$_GET["ordem"]; 
else 
$ordem="cli_codigo"; 
$sql1="SELECT * FROM tbl_cliente ORDER BY $ordem"; 
$res=mysqli_query($conexao, "$sql1"); 
while($registro=mysqli_fetch_row($res)) 
{ 
$codigo=$registro[0]; 
$nome=$registro[1]; 
$rg=$registro [2]; 
$cpf=$registro[3]; 
echo "<tr>"; 
echo "<td width='10%'>"; 
echo "<p align='center'>$codigo</td>"; 
echo "<td align='center' width '25%'>$nome</td>"; 
echo "<td align='center' width '40%'>$rg</td>"; 
echo "<td align='center' width '14%'>$cpf</td>"; 
echo "</tr>"; 
}
mysqli_close($conexao); 
?> 
</table> 
</center> 
</div> 
<p align="center"><a href="javascript:history.back();">Voltar</a></p> 
</body> 
</html>