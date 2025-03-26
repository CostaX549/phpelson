<html>
<head> <title>Inclusão Registros</title></head>
<body>
<h2 align="center">Inclusão de Produtos</h2><hr>
<?php
require_once("conecta.php");
?>
<form name="frmIncluir" method="POST" action="inserir.php">
Nome :<input type="text" name="txtNome" size="30"><br>
RG :<input type="text" name="txtRG" size="10"><br>
CPF :<input type="text" name="txtCPF" size="10"><br>
<input type="submit" name ="submit" value="Incluir">
</form>
</body>
</html>
