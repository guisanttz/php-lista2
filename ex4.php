<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 4 - Meses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercício 4 - Meses</h1>
        <form method="post" action="ex4.php">
            <div class="mb-3">
                <label for="num" class="form-label">Digite um número entre 1 e 12:</label>
                <input type="number" id="num" name="num" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button><br>
            <a href="index.html">Retornar ao início</a>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $numero = $_POST['num'];

    switch ($numero) {
        case '1':
            $mes = 'Janeiro';
            break;
        case '2':
            $mes = 'Fevereiro';
            break;
        case '3':
            $mes = 'Março';
            break;
        case '4':
            $mes = 'Abril';
            break;
        case '5':
            $mes = 'Maio';
            break;
        case '6':
            $mes = 'Junho';
            break;
        case '7':
            $mes = 'Julho';
            break;
        case '8':
            $mes = 'Agosto';
            break;
        case '9':
            $mes = 'Setembro';
            break;
        case '10':
            $mes = 'Outubro';
            break;
        case '11':
            $mes = 'Novembro';
            break;
        case '12':
            $mes = 'Dezembro';
            break;
        default:
            $mes = null;
            echo '<h4>Dígito incorreto, informe um número entre 1 e 12.';
            break;
    }
    echo "<h4>" . $mes . "</h4>";
}
