<!DOCTYPE html>
<html>
<head>
<title>Cadastro de usuários</title>
</head>
<body>
    <head>
     <h1>Cadastro de usuários</h1>
        <p>Criação de sistema com armazenamento em banco de dados utilizando PHP</p>
    </head>



<a href="index.php">Voltar</a>

<form action="/save.php"  method="post">
  <label for="nome">Escreva seu nome:</label><br>
  <input type="text" id="nome" name="nome"><br>
  <label for="email">Escreva seu E-mail:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="senha">Digite sua senha:</label><br>
  <input type="password" id="senha" name="senha"><br>
  <input type="submit" value="Finalizar cadastro">
</form>

<footer>
    <p>SISTEMA BDWeb</p>
    <p> Author: Maria Eduarda Fernandes Lago<br>
        E-mail: <a href = "marialagoufrn@gmail.com">marialagoufrn@gmail.com</a></p>
</footer>

</html>

