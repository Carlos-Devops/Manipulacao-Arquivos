<?php
  
  $arquivo = "visitas.txt";
  $ArqDestino = "visitasBKP.txt";


  if(copy($arquivo,$ArqDestino))
  {
    echo("Arquivo Copiado c/Sucesso :-)");
  }
  else{
      echo("Arquivo Não Copiado :-(");
    }

?>