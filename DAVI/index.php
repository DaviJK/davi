<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
include "lib.php";
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>FORMULARIO</title>
</head>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

<header><h1>FORMULÁRIO</h1></header>


<body>
    <fieldset>
    
<form name="meu_form">

  <h2>Entre em contato</h2>

  

  <label for="">Nome</label>
  <input type="text" maxlength="55" id="nomeid" placeholder="digite seu nome" required="required" name="nome" /> <br>
  <label for="nome">telefone</label>
  <input type="tel" maxlength="55" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone" /> <br>
  <label for="fone">email</label>

  <input type="email" maxlength="55" id="emailid" placeholder="digite seu email" name="email" /> <br>
  <label for="email"></label>

  <label>nascimento</label>
  <input type="date">
  <input type="submit" class="enviar" onclick="Enviar();" value="Enviar" /> <br>
</form>
</fieldset>

</body>
</html>
</body>
</html>