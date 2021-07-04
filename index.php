<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>unidade digital</title>

	<style>

	table, th, td {
    border: 1px solid black;
	}
	table {
    border-collapse: collapse;
    width: 52%;
	}
	td {
    border-collapse: collapse;
    width: 2%;
	}	
	</style>
</head>
<body>

	<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
	<h1 align = "center">saiba o valor bit, B, KB, MB, GB e TB</h1>
	<div align='center'>
	Digite os valores<br>
	Calcule: <input type="text" name="val">
	 <select name="tipo">
	  <option value="Bytes">Bytes</option>
	  <option value="KB">KB</option>
	  <option value="MB">MB</option>
	  <option value="GB">GB</option>
	  <option value="TB">TB</option>
	</select>
<!-- //operador -->
<select name="oper">
	  <option value="sub">Menos[ - ]</option>
	  <option value="somar">Mais[+]</option>
	  <option value="multi">Vezes[*]</option>
	  <option value="divi">Dividido[ / ]</option>
</select> 
<!-- fim operador -->
	<input type="text" name="val2">
	 <select name="tipo2">
	  <option value="Bytes">Bytes</option>
	  <option value="KB">KB</option>
	  <option value="MB">MB</option>
	  <option value="GB">GB</option>
	  <option value="TB">TB</option>
	</select>

	<input type="hidden" name="cadastro" value="ok" />
	<input type="hidden" name="cadastro" value="ok" />
	<input type="submit" Value="Calcular">
	</div>

</form>
</body>
</html>

<?php 
include_once 'Classe/Converter.class.php';

if(isset($_POST['val']) && isset($_POST['tipo']) && isset($_POST['oper']) && isset($_POST['val2']) && isset($_POST['tipo2']) == 'ok')
{

	$valox = $_POST["val"];
	$tipoDado = $_POST["tipo"];
	$operador = $_POST["oper"];
	$valory = $_POST["val2"];
	$tipoDado2 = $_POST["tipo2"];


	if($tipoDado =="Bytes" & $tipoDado2 =="Bytes" & $operador=="somar")
	{
		$obj1 = new Converter($valox,$valory);
		$obj1->somarBytes_Bytes($valox,$valory);
	}

	if($tipoDado =="Bytes" && $tipoDado2 =="Bytes" && $operador=="sub")
	{
		$obj1 = new Converter($valox,$valory);
		$obj1->calcBytes_Bytes($valox,$valory);
	}

	//multiplicar
	if($tipoDado =="Bytes" & $tipoDado2 =="Bytes" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiBytes_Bytes($valox,$valory);
	}
	//fim multiplicar

	//Divisor
	if($tipoDado =="Bytes" & $tipoDado2 =="Bytes" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviBytes_Bytes($valox,$valory);
	}
	//fim Divisor
	
	if($tipoDado =="KB"& $tipoDado2 =="Bytes" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcKB_Bytes($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="Bytes" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaKB_Bytes($valox,$valory);
	}
	if($tipoDado =="KB"& $tipoDado2 =="Bytes" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviKB_Bytes($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="Bytes" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiKB_Bytes($valox,$valory);
	}


	if($tipoDado =="MB"& $tipoDado2 =="Bytes" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcMB_Bytes($valox,$valory);
	}
	if($tipoDado =="MB"& $tipoDado2 =="Bytes" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaMB_Bytes($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="Bytes" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->multiMB_Bytes($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="Bytes" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->diviMB_Bytes($valox,$valory);
	}
	//fim
	if($tipoDado =="GB"& $tipoDado2 =="Bytes" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->CalcGB_Bytes($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="Bytes" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaGB_Bytes($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="Bytes" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiGB_Bytes($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="Bytes" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviGB_Bytes($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="Bytes" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcTB_Bytes($valox,$valory);
	}

		if($tipoDado =="TB"& $tipoDado2 =="Bytes" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaTB_Bytes($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="Bytes" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiTB_Bytes($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="Bytes" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviTB_Bytes($valox,$valory);
	}

	//KB VERSOS TUDO

	if($tipoDado =="Bytes" & $tipoDado2 =="KB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcBytes_KB($valox,$valory);
	}
	
	if($tipoDado =="Bytes" & $tipoDado2 =="KB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaBytes_KB($valox,$valory);
	}

	if($tipoDado =="Bytes" & $tipoDado2 =="KB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->multiBytes_KB($valox,$valory);
	}

	if($tipoDado =="Bytes" & $tipoDado2 =="KB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviBytes_KB($valox,$valory);
	}
	//
	if($tipoDado =="KB"& $tipoDado2 =="KB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcKB_KB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="KB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaKB_KB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="KB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiKB_KB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="KB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviKB_KB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="KB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcMB_KB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="KB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaMB_KB($valox,$valory);
	}
		if($tipoDado =="MB"& $tipoDado2 =="KB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiMB_KB($valox,$valory);
	}

		if($tipoDado =="MB"& $tipoDado2 =="KB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviMB_KB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="KB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcMB_KB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="KB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaMB_KB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="KB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiMB_KB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="KB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviMB_KB($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="KB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcTB_kB($valox,$valory);
	}


	if($tipoDado =="TB"& $tipoDado2 =="KB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaTB_kB($valox,$valory);
	}


	if($tipoDado =="TB"& $tipoDado2 =="KB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiTB_kB($valox,$valory);
	}


	if($tipoDado =="TB"& $tipoDado2 =="KB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviTB_kB($valox,$valory);
	}

	//MB VERSOS TUDO

	if($tipoDado =="Bytes" & $tipoDado2 =="MB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcBytes_MB($valox,$valory);
	}


	if($tipoDado =="Bytes" & $tipoDado2 =="MB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaBytes_MB($valox,$valory);
	}
	

	if($tipoDado =="Bytes" & $tipoDado2 =="MB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiBytes_MB($valox,$valory);
	}
	

	if($tipoDado =="Bytes" & $tipoDado2 =="MB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviBytes_MB($valox,$valory);
	}
	
	
	if($tipoDado =="KB"& $tipoDado2 =="MB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcKB_MB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="MB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaKB_MB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="MB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiKB_MB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="MB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviKB_MB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="MB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcMB_MB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="MB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaMB_MB($valox,$valory);
	}
	if($tipoDado =="MB"& $tipoDado2 =="MB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiMB_MB($valox,$valory);
	}
	if($tipoDado =="MB"& $tipoDado2 =="MB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviMB_MB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="MB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcGB_MB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="MB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaGB_MB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="MB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiGB_MB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="MB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviGB_MB($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="MB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcTB_MB($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="MB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaTB_MB($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="MB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiTB_MB($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="MB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviTB_MB($valox,$valory);
	}

	//GB VERSOS TUDO

	if($tipoDado =="Bytes" & $tipoDado2 =="GB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcBytes_GB($valox,$valory);
	}

	if($tipoDado =="Bytes" & $tipoDado2 =="GB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaBytes_GB($valox,$valory);
	}

	if($tipoDado =="Bytes" & $tipoDado2 =="GB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiBytes_GB($valox,$valory);
	}

	if($tipoDado =="Bytes" & $tipoDado2 =="GB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviBytes_GB($valox,$valory);
	}

	
	if($tipoDado =="KB"& $tipoDado2 =="GB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcKB_GB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="GB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaKB_GB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="GB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiKB_GB($valox,$valory);
	}
	if($tipoDado =="KB"& $tipoDado2 =="GB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviKB_GB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="GB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcMB_GB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="GB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaMB_GB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="GB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiMB_GB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="GB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviMB_GB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="GB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcMB_GB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="GB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaMB_GB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="GB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiMB_GB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="GB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviMB_GB($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="GB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcTB_GB($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="GB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaTB_GB($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="GB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiTB_GB($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="GB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviTB_GB($valox,$valory);
	}

		//TERA BYTES VERSOS TUDO

	if($tipoDado =="Bytes" & $tipoDado2 =="TB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcBytes_TB($valox,$valory);
	}

	if($tipoDado =="Bytes" & $tipoDado2 =="TB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaBytes_TB($valox,$valory);
	}

	if($tipoDado =="Bytes" & $tipoDado2 =="TB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiBytes_TB($valox,$valory);
	}

	if($tipoDado =="Bytes" & $tipoDado2 =="TB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviBytes_TB($valox,$valory);
	}
	
	if($tipoDado =="KB"& $tipoDado2 =="TB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcKB_TB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="TB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaKB_TB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="TB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiKB_TB($valox,$valory);
	}

	if($tipoDado =="KB"& $tipoDado2 =="TB" & $operador=="divi[")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviKB_TB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="TB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcMB_TB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="TB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaMB_TB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="TB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->multiMB_TB($valox,$valory);
	}

	if($tipoDado =="MB"& $tipoDado2 =="TB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviMB_TB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="TB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcMB_TB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="TB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaMB_TB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="TB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiMB_TB($valox,$valory);
	}

	if($tipoDado =="GB"& $tipoDado2 =="TB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviMB_TB($valox,$valory);
	}

	if($tipoDado =="TB"& $tipoDado2 =="TB" & $operador=="sub")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->calcTB_TB($valox,$valory);
	}
	if($tipoDado =="TB"& $tipoDado2 =="TB" & $operador=="somar")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->SomaTB_TB($valox,$valory);
	}
	if($tipoDado =="TB"& $tipoDado2 =="TB" & $operador=="multi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->MultiTB_TB($valox,$valory);
	}
	if($tipoDado =="TB"& $tipoDado2 =="TB" & $operador=="divi")
	{
	$obj1 = new Converter($valox,$valory);
	$obj1->DiviTB_TB($valox,$valory);
	}
	
}

?>