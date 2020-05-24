<?php

	$arquivo = "visitas.txt";
	$ArqDestino = "visitas2.txt";

	copy($arquivo,$ArqDestino);


	if(unlink($arquivo))
	{
		echo("Arquivo Apagado c/Sucesso :-)");
	}
	else{
			echo("Arquivo Apagado :-(");
		}

?>