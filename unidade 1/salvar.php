<!DOCTYPE html>
<html>

<head>
	<title>BDW - Maria Eduarda Fernandes Lago</title>
</head>

<body>

    <h1>Salvar</h1>


    <?php
        $nome =  $_POST["nome"];
        $email =  $_POST["email"];
        $senha = sha1($_POST["senha"]);

	    $servername = "sql308.epizy.com";
	    $username = "epiz_30293426";
	    $password = "qQS2qbYktI4xDKu";
	    $dbname = "epiz_30293426_mybank";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO usuario (nome, email, senha)  VALUES ( '".$nome."' , '".$email."', '".$senha."')";

        if ($conn->query($sql) === TRUE) {
        header('Location: index.php?msg=Usuario cadastrado com sucesso!');
        exit;
        } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    ?>
    

<br>
    <a href = "index.php">voltar</a>
</body>
</html>
