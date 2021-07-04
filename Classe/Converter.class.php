<?php 
	class Converter
	{
		var $valor;
		var $valor2;
		var	$bit;
		var	$byte;
		var	$kb;
		var	$mb;
		var	$gb;
		var	$tb;
		var $tbGB;
		
		var	$bit2;
		var	$byte2;
		var $kb2;
		var	$mb2;
		var	$gb2;
		var	$tb2;
		var $tbGB2;

		var $difbit;
		var $difbytes;
		var $difkb;
		var $difmb;
		var $difgb;
		var $diftb;

		function __construct($valor,$valor2)
		{
			$this->valor = $valor;
			$this->valor2 = $valor2;
		}

		//Bytes Vs (Bytes, KB,MB,GB,TB)*******************************
		function calcBytes_Bytes($valor,$valor2)	//calcula para bytes
		{
			
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//VALOR2 em Bytes
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
	
			echo "<h3 align='center'>Calcule $this->valor Bytes - $this->valor2 Bytes é: </h3>
			<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					 	<td>{$this->bit2} bit<br></td>
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//função somar bytes + bytes
		function somarBytes_Bytes($valor,$valor2)	//calcula para bytes
		{
			
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//VALOR2 em Bytes
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
	
			echo "<h3 align='center'>Calcule $this->valor Bytes + $this->valor2 Bytes é: </h3>
			<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					 	<td>{$this->bit2} bit<br></td>
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//fim da somar
		//função multiplicar bytes*bytes
		function MultiBytes_Bytes($valor,$valor2)	//calcula para bytes
		{
			
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//VALOR2 em Bytes
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
	
			echo "<h3 align='center'>Calcule $this->valor Bytes * $this->valor2 Bytes é: </h3>
			<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					 	<td>{$this->bit2} bit<br></td>
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//fim da multiplicar
		//função dividir bytes / bytes
		function DiviBytes_Bytes($valor,$valor2)	//calcula para bytes
		{
			
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//VALOR2 em Bytes
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//Dividir entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
	
			echo "<h3 align='center'>Calcule $this->valor Bytes / $this->valor2 Bytes é: </h3>
			<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					 	<td>{$this->bit2} bit<br></td>
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//fim da dividir
		//função bytes - KB
		function calcBytes_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Kbytes(KB)
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes - $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//somar BYtes e KB
		function somaBytes_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Kbytes(KB)
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes + $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function DiviBytes_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Kbytes(KB)
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes / $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}

		//Multiplica fim bytes e kb
		function MultiBytes_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//multi entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes * $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//divide bytes / MB
		function DiviBytes_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//divide Bytes / MB
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes / $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//Soma bytes com MB
		function SomaBytes_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//divide Bytes / MB
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes + $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim Soma byte+MB
		//Subtrai Byte - MB
		function calcBytes_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes - $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td bgcolor='#6666FF'>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim Byte- MB

		function calcBytes_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes - $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td bgcolor='#6666FF'>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//soma byte + GB
		function SomaBytes_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes + $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td bgcolor='#6666FF'>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim Soma Byte +GB

		//MUltiplica byte + GB
		function MultiBytes_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes * $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td bgcolor='#6666FF'>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim Soma Byte +GB

		//Divide byte + GB
		function DiviBytes_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes / $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td bgcolor='#6666FF'>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim Soma Byte +GB

		function calcBytes_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor Bytes - $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td bgcolor='#6666FF'>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function SomaBytes_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
			
			echo "<h3 align='center'>Calcule $this->valor Bytes + $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td bgcolor='#6666FF'>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function MultiBytes_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
			
			echo "<h3 align='center'>Calcule $this->valor Bytes * $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td bgcolor='#6666FF'>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function DiviBytes_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em Bytes(B)
			$this->byte = $this->valor; //valor em bytes
			$this->bit = $this->byte*8;
			$this->kb = $this->byte/1024;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
			
			echo "<h3 align='center'>Calcule $this->valor Bytes / $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td bgcolor='#6666FF'>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";

		}//fim divisaõ

		//KB Vs (Bytes,KB,MB,GB,TB)************************************
		function calcKB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB - $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td bgcolor='#6666FF'>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//soma
		function SomaKB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB + $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td bgcolor='#6666FF'>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//multi
		function MultiKB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB * $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td bgcolor='#6666FF'>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim multi
		//dividir
		function DiviKB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB / $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td bgcolor='#6666FF'>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim divi KB - Bytes
		//diferenca KB - KB
		function calcKB_KB($valor,$valor2)	//calcula para bytes
		{	//valor1 em KB
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB - $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}

		//diferenca KB - KB
		function SomaKB_KB($valor,$valor2)	//calcula para bytes
		{	//valor1 em KB
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//soma entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB + $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim soma KB + KB

		function MultiKB_KB($valor,$valor2)	//calcula para bytes
		{	//valor1 em KB
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//soma entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB * $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim soma KB + KB

		function DiviKB_KB($valor,$valor2)	//calcula para bytes
		{	//valor1 em KB
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//soma entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB / $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim soma KB + KB

		function calcKB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB - $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//soma
		function SomaKB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB + $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim soma
		function MultiKB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB * $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim soma
		function DiviKB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB / $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//fim Divide

		function calcKB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;

			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB - $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function SomaKB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//soma KB + GB
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB + $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function MultiKB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//soma KB + GB
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB * $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function DiviKB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//soma KB + GB
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB / $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function calcKB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB - $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function SomaKB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB + $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function MultiKB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB * $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function DiviKB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em KBytes(KB)
			$this->kb = $this->valor;
			$this->byte = $this->valor*1024; //valor em bytes
			$this->bit = $this->byte*8;
			$this->mb = $this->kb/1024;
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor KB / $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td bgcolor='#6666FF'>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//MB Vs (Bytes,MB,GB,TB)************************************
		function calcMB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB - $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//MB Vs (Bytes,MB,GB,TB)************************************
		function SomaMB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB + $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//soma
		//MB Vs (Bytes,MB,GB,TB)************************************
		function MultiMB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB * $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//soma
		//MB Vs (Bytes,MB,GB,TB)************************************
		function DiviMB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2/1024;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB / $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//dividir
		function calcMB_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB - $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function SomaMB_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB + $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function MultiMB_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB * $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function DiviMB_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB / $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function calcMB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB - $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function SomaMB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB + $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function MultiMB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB * $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function DiviMB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB / $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//dividir
		//
		function calcMB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB - $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function SomaMB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB + $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function MultiMB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB * $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function DiviMB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB / $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function calcMB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB - $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function SomaMB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB + $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//
		//
			//
		function MultiMB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB * $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//
		//
			//
		function DiviMB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em MBytes(KB)
			$this->mb = $this->valor;
			$this->kb = $this->valor*1024;
			$this->byte = $this->kb*1024; //valor em bytes
			$this->bit = $this->byte*8;		
			$this->gb = $this->mb/1024;
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor MB / $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td bgcolor='#6666FF'>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}//
		//

		//GB Vs (Bytes,KB,MB,GB,TB)************************************
		//
		function calcGB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2*1024;
			$this->mb2 = $this->kb2*1024;
			$this->gb2 = $this->mb2*1024;
			$this->tb2 = $this->gb2*1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB - $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
			//
		function SomaGB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2*1024;
			$this->mb2 = $this->kb2*1024;
			$this->gb2 = $this->mb2*1024;
			$this->tb2 = $this->gb2*1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB + $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
			//
		function MultiGB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2*1024;
			$this->mb2 = $this->kb2*1024;
			$this->gb2 = $this->mb2*1024;
			$this->tb2 = $this->gb2*1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB * $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
			//
		function DiviGB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2*1024;
			$this->mb2 = $this->kb2*1024;
			$this->gb2 = $this->mb2*1024;
			$this->tb2 = $this->gb2*1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB / $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function calcGB_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB - $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function SomaGB_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB + $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function MultiGB_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB * $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function DiviGB_KB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB / $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function calcGB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB - $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function SomaGB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB + $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		function MultiGB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB * $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		function DiviGB_MB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB / $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function calcGB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB - $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function SomaGB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB + $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function MultiGB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB * $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function DiviGB_GB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB / $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function calcGB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(GB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB - $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function SomaGB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(GB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB + $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function MultiGB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(GB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB * $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function DiviGB_TB($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(GB)
			$this->gb = $this->valor;
			$this->mb = $this->valor*1024;
			$this->kb = $this->mb*1024; //valor em bytes
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;		
			$this->tb = $this->gb/1024;
			//saída em Tbytes(TB)
			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor GB / $this->valor2 TB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td bgcolor='#6666FF'>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//TB Vs (Bytes,KB,MB,GB,TB)************************************
		function calcTB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2*1024;
			$this->mb2 = $this->kb2*1024;
			$this->gb2 = $this->mb2*1024;
			$this->tb2 = $this->gb2*1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB - $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//TB Vs (Bytes,KB,MB,GB,TB)************************************
		function SomaTB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2*1024;
			$this->mb2 = $this->kb2*1024;
			$this->gb2 = $this->mb2*1024;
			$this->tb2 = $this->gb2*1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB + $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function MultiTB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2*1024;
			$this->mb2 = $this->kb2*1024;
			$this->gb2 = $this->mb2*1024;
			$this->tb2 = $this->gb2*1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB * $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function DiviTB_Bytes($valor,$valor2) //Calcula entre bytes e KB
		{
			//saida em GBytes(KB)
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em bytes(B)
			$this->byte2 = $this->valor2; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->kb2 = $this->byte2*1024;
			$this->mb2 = $this->kb2*1024;
			$this->gb2 = $this->mb2*1024;
			$this->tb2 = $this->gb2*1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB / $this->valor2 Bytes é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td bgcolor='#6666FF'>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function calcTB_kB($valor,$valor2) //Calcula entre bytes e KB
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB - $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function SomaTB_kB($valor,$valor2) //Calcula entre bytes e KB
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB + $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function MultiTB_kB($valor,$valor2) //Calcula entre bytes e KB
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB * $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function DiviTB_kB($valor,$valor2) //Calcula entre bytes e KB
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//valor2 em KB
			$this->kb2 = $this->valor2;
			$this->byte2 = $this->valor2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;
			$this->mb2 = $this->kb2/1024;
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB / $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function calcTB_MB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB - $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function SomaTB_MB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB + $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function MultiTB_MB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB * $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function DiviTB_MB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em Mbytes(MB)
			$this->mb2 = $this->valor2;
			$this->kb2 = $this->valor2*1024;
			$this->byte2 = $this->kb2*1024; //valor em bytes
			$this->bit2 = $this->byte2*8;		
			$this->gb2 = $this->mb2/1024;
			$this->tb2 = $this->gb2/024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB / $this->valor2 MB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function calcTB_GB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB - $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function SomaTB_GB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB + $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function MultiTB_GB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB * $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		function DiviTB_GB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;
			//saída em Gbytes(GB)
			$this->gb2 = $this->valor2;
			$this->mb2 = $this->valor2*1024;
			$this->kb2 = $this->mb2*1024; //valor em bytes
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;		
			$this->tb2 = $this->gb2/1024;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB / $this->valor2 GB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function calcTB_TB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;

			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte - $this->byte2;
			$this->difbit   = $this->bit - $this->bit2;
			$this->difkb = $this->kb - $this->kb2;
			$this->difmb = $this->mb - $this->mb2;
			$this->difgb = $this->gb - $this->gb2;
			$this->diftb = $this->tb - $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB - $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//
		function SomaTB_TB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;

			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte + $this->byte2;
			$this->difbit   = $this->bit + $this->bit2;
			$this->difkb = $this->kb + $this->kb2;
			$this->difmb = $this->mb + $this->mb2;
			$this->difgb = $this->gb + $this->gb2;
			$this->diftb = $this->tb + $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB + $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
			//
		function MultiTB_TB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;

			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte * $this->byte2;
			$this->difbit   = $this->bit * $this->bit2;
			$this->difkb = $this->kb * $this->kb2;
			$this->difmb = $this->mb * $this->mb2;
			$this->difgb = $this->gb * $this->gb2;
			$this->diftb = $this->tb * $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB * $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
			//
		function DiviTB_TB($valor,$valor2)	//calcula para bytes
		{
			$this->tb = $this->valor; //valor em bytes
			$this->gb = $this->tb*1024;
			$this->mb = $this->gb*1024;
			$this->kb = $this->mb*1024;
			$this->byte = $this->kb*1024;
			$this->bit = $this->byte*8;

			$this->tb2 = $this->valor2; //valor em bytes
			$this->gb2 = $this->tb2*1024;
			$this->mb2 = $this->gb2*1024;
			$this->kb2 = $this->mb2*1024;
			$this->byte2 = $this->kb2*1024;
			$this->bit2 = $this->byte2*8;
			//diferença entre BYtes de mesma unidade
			$this->difbytes = $this->byte / $this->byte2;
			$this->difbit   = $this->bit / $this->bit2;
			$this->difkb = $this->kb / $this->kb2;
			$this->difmb = $this->mb / $this->mb2;
			$this->difgb = $this->gb / $this->gb2;
			$this->diftb = $this->tb / $this->tb2;
		
			echo "<h3 align='center'>Calcule $this->valor TB / $this->valor2 KB é: </h3>
					<table align='center'>
					<tr>
					    <td>Bits</td>
					    <td>{$this->bit} bit<br></td>		    
					    <td>{$this->bit2} bit<br></td>		    
					    <td>{$this->difbit} bit<br></td>		    
					</tr>
					<br>
				<table>";

			echo "<table align='center'>
					<tr>
					    <td>Bytes</td>
					    <td>{$this->byte} Bytes<br></td>		    
					    <td>{$this->byte2} Bytes<br></td>		    
					    <td>{$this->difbytes} Bytes<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>KB</td>
					    <td>{$this->kb} KB<br></td>		    
					    <td>{$this->kb2} KB<br></td>		    
					    <td>{$this->difkb} KB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>MB</td>
					    <td>{$this->mb} MB<br></td>		    
					    <td>{$this->mb2} MB<br></td>		    
					    <td>{$this->difmb} MB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>GB</td>
					    <td>{$this->gb} GB<br></td>		    
					    <td>{$this->gb2} GB<br></td>		    
					    <td>{$this->difgb} GB<br></td>		    
					</tr>
					<br>
				<table>";
			
			echo "<table align='center'>
					<tr>
					    <td>TB</td>
					    <td bgcolor='#6666FF'>{$this->tb} TB<br></td>		    
					    <td bgcolor='#6666FF'>{$this->tb2} TB<br></td>		    
					    <td>{$this->diftb} TB<br></td>		    
					</tr>
					<br>
				<table>";
		}
		//
		//TODOS Vs KB**************************************************
		
	}
 ?>