<!DOCTYPE html>
<html lang="pt-br">
<body>
<head>
	<meta charset="utf-8">
	<title># Manipulação Arquivos</title>
	<link rel ="shortcut icon" href="logo.ico">
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/loja.css" rel="stylesheet"/>
</head>
<body>
    
<?php
    /*Abrindo o arquivo no modo de leitura "r" ficando armazenando na variavel arquivo*/
    $arquivo=fopen("visitas.txt", "r");
     /*Usamos o while para percorrer o arquivo enquanto ele não chega no final para isso usamos a funcao "feof" para ela passamos a variavel "$arquivo" mas essa função faz o teste quando chega no final do arquivo para isso usamos o operador ! (not) */
    while(!feof($arquivo)){  
        echo "<br/><br>";  
        echo fgets($arquivo, 4096);  /*fgets comando para ler a linha "mensagem" usamos 4096 bytes */
        echo fgets($arquivo, 100);  /*fges comando para ler "nome" usamos 100 bytes*/
        echo "<br/><br>";           
    }
         /*Função de fechar o arquivo*/
        fclose($arquivo);

?>
   <div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index-arquivos.php">[VOLTAR]</a>
?>