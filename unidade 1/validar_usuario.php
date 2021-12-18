<!DOCTYPE html>
<html>

<head>
	<title>Loja de Anoes do Pedroca</title>
</head>

<body>

	<h1>Validar usuario</h1>
	<p>Anao eh babao</p>

	<?php
        $tag = "Pai das Crianca" ;
        "<br>";
        echo "<br>" . "Essa eh a seresta do " . $tag ."<p>" ;
        "<br>";
    
    ?>

    <?php
        // Start the session
        session_start();
    ?>

  

    <?php 
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $estalogado = false;
    $_SESSION["estalogado"]=false;
    $_SESSION["email"]=$email;

    $servername = "sql111.epizy.com";
    $username = "epiz_30214671";
    $password = "mbbuwAcNRuWrmo";
    $dbname = "epiz_30214671_lojadeanao";

    // Create connection
    $conn = new mysqli($servername, $username, $password ,$dbname);

    // Check connection
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // comparar as informações
        while($row = $result->fetch_assoc()) {
            if($row["email"]==$email && $row["senha"] == sha1($senha)) {
               $_SESSION["estalogado"] = true;

            }
        // echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " - E-mail: " . $row["email"]. "<br>";
        }
    } else {
         echo "0 results";
        }
    if($_SESSION["estalogado"]){
        echo "Esta logado!". "</br>";
        header("Location: home.php");
    }else{
        echo "Nao ta logado :(" . "</br>";
        header("Location: login.php?msg =Dados invalidos");
    }
    $conn->close();

    ?>
    <a href = "home.php">Ir para home</a>
</body>

</html>