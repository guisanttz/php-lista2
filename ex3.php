<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3 - Desconto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercício 3 - Desconto</h1>
        <form method="post" action="ex3.php">
            <div class="mb-3">
                <label for="valorProduto" class="form-label">Insira o valor do produto:</label>
                <input type="number" id="valorProduto" name="valorProduto" class="form-control" required="">
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

    $valorProduto = $_POST['valorProduto'];

    if ($valorProduto > 100) {
        $novoValor = $valorProduto - ($valorProduto * 0.15);
        echo "<h4>Desconto de 15% aplicado</h4>";
        echo "<h4>Novo valor: R$ " . number_format($novoValor, 2, ",", ".");
    } else {
        echo "<h4>Nenhum desconto aplicado</h4>";
        echo "<h4>Valor: R$ " . number_format($valorProduto, 2, ",", ".");
    }

}