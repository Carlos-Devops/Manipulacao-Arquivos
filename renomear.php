<?php

	$nomeArq = "visitas.txt";
	$arquivo = "visitas.txt";
	$ArqDestino = "C:\php\Projeto\Site_Aula10\Manipulação_Arquivos".$nomeArq;

	if(rename($arquivo,$ArqDestino))
	{
		echo("Arquivo Renomeado c/Sucesso ");
	}
	else{
			echo("Arquivo não Renomeado ");
		}

?>