<?php

$conn =  mysqli_connect("localhost","root","");
mysqli_select_db($conn,"catalogo");
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$data = $_POST['data'];

$strInsert = "INSERT INTO filmes (nome, genero, data) VALUES ('".$nome."', '".$genero."', '".$data."')";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cast-Filmes</title>
    <link rel="stylesheet" href="css/estiloDasPaginas.css">
</head>

<header>
    <h1 class="cast-filmes">Cast-Filmes</h1>
</header>

<body>
    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cadastra.php">Cadastrar</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>

    <main>
        <h1 class="titulo-principal">Cadastro</h1>
        <div class="container">
            <form action="catalogo.php" method="POST ">
                <div>
                    <label for="nome">Nome do filme</label>
                    <input type="text" name="nome" />
                </div>
                <div>
                    <label for="genero">Gênero</label>
                    <input type="text" name="genero" />
                </div>
                <div>
                    <label for="data">Data de lançamento</label>
                    <input type="date" name="data" />
                </div>
                <div class=butt>
                    <button type="submit" value=enviar>Cadastrar</button>
                </div>
            </form>

        </div>
    </main>

    <footer class="footer">
        &copy; Michel Bernardo 2020
    </footer>
</body>

</html>