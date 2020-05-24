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
     /*Recebendo os dados passados no arquivo de formulário escrever.php*/
    $nome=$_POST['nome'];
    $msg=$_POST["msg"];
     /*As variaveis mensagem e usuario que contém a mensagem e o nome de quem a deixou*/
    $mensagem=$msg."\r\n"; // Quebra de linha "\r\n"
    $usuario=$nome."\r\n"; // Quebra de linha "\r\n"

     /*Função que abre o arquivo, passamos o arquivo e modo de abertura do mesmo arquivo, mas precisamos que a escrita seja no final para não sobrescrever as mensagens "a" */
    $arquivo=fopen("visitas.txt", "a");

    /*Função de leitura de arquivo passamos o ponteiro arquivo e o conteudo que está nas variaveis mensagem e usuario */
    fwrite($arquivo, $mensagem, $usuario);

    echo "Mensagem Gravada: $mensagem";

    echo "Usuário: $nome";

     /*Função de fechar o arquivo*/
    fclose($arquivo);


   ?>
      <hr>

      <div id="copiar" style="width: 100%; text-align: center;">
      </div> 
      <div id="deletar" style="width: 100%; text-align: center;">
      </div>
      <div id="renomear" style="width: 100%; text-align: center;">
      </div>
      
   <td>
        <br><br>
        <form action="copiar.php" method = "post">
          <input type="hidden" name="copiar" >
          <button class="btn btn-primary">COPIAR</button>
        </form>
      </td>
      <br><br>
<td>
        <form action="deletar-arquivos.php" method = "post">
          <input type="hidden" name="deletar" >
          <button class="btn btn-danger">EXCLUIR</button> 
        </form>
        <br><br>
        <form action="renomear.php" method = "post">
          <input type="hidden" name="renomear" >
          <button class="btn btn-warning">RENOMEAR ARQUIVO</button> 
        </form>
      </td>
      </td>
   <hr/>
      <div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="escrever.html">[VOLTAR]</a>
</body>
</html>


