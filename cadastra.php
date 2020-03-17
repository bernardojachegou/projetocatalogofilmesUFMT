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
            <form action="" method="post">
                <div>
                    <label for="Nome">Nome do filme</label>
                    <input type="text" id="nome" />
                </div>
                <div>
                    <label for="Gênero">Gênero</label>
                    <input type="text" id=genero />
                </div>
                <div>
                    <label for="Data">Data de lançamento</label>
                    <input type="date" id=data />
                </div>
                <div class=butt>
                    <button type="submit">Cadastrar</button>
                </div>
            </form>

        </div>
    </main>

    <footer class="footer">
        &copy; Michel Bernardo 2020
    </footer>
</body>

</html>