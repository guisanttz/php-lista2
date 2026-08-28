<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercício 2 - Ordem Crescente</h1>
        <form method="post" action="ex2.php">
            <div class="mb-3">
                <label for="valor_A" class="form-label">Informe o valor de A: </label>
                <input type="number" id="valor_A" name="valor_A" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valorB" class="form-label">Informe o valor de B:</label>
                <input type="number" id="valor_B" name="valor_B" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button><br>
            <a href="index.html">Retornar ao início</a>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $valor_A = $_POST['valor_A'];
    $valor_B = $_POST['valor_B'];

    if ($valor_A == $valor_B)
        echo "<h4>Números iguais: " . $valor_A . "</h4>";
    elseif ($valor_A < $valor_B)
        echo "<h4>" . $valor_A . " " . $valor_B . "</h4>";
    else
        echo "<h4>" . $valor_B . " " . $valor_A . "</h4>";

}