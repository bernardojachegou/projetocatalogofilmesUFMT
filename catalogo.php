<?php 
    $conn =  mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"catalogo"); 
    /* Pegar os dados do BD*/
    $result = mysqli_query($conn,"SELECT * FROM filmes");

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
        <h1 class="titulo-principal">Catálogo</h1>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Gênero</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conn,"SELECT * FROM filmes"); 
                ?>
                    <?php
                    while ($filmes = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$filmes['nome']."</td>";
                        echo "<td>".$filmes['genero']."</td>";
                        echo "<td>".$filmes['data']."</td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="footer">
        &copy; Michel Bernardo 2020
    </footer>
</body>

</html>