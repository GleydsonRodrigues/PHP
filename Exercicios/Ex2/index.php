<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
    <!-- Adicionando o bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="container bg-light">
    <h1>Cadastro de produtos</h1>
    <p>Fomulário de cadastro de produtos</p>

    <!-- Linhas com o bootstrap -->
    <div class="row">
        <!-- Grupo de item de formulário com 6 colunas -->
        <div class="form-group col-md-6">
            <label for="txtproNome">Nome do produto:</label>
            <input type="text" class="form-control" name="txtproNome" id="txtproNome">
        </div>
        <!-- Grupo de item de formulário com 3 colunas -->
        <div class="form-group col-md-3">
            <label for="txtproMarca">Marca:</label>
            <input type="text" class="form-control" name="txtproMarca" id="txtproMarca">
        </div>
        <!-- Grupo de item de formulário com 3 colunas -->
        <div class="form-group col-md-3">
            <label for="txtproModelo">Modelo:</label>
            <input type="text" class="form-control" name="txtproModelo" id="txtproModelo">
        </div>

    </div>
    <!-- Linhas com o bootstrap -->
    <div class="row">
        <!-- Grupo de item de formulário com 4 colunas -->
        <div class="form-group col-md-4">
            <label for="txtproValor">Valor do produto:</label>
            <input type="text" class="form-control" name="txtproValor" id="txtproValor">
        </div>
        <!-- Grupo de item de formulário com 2 colunas -->
        <div class="form-group col-md-2">
            <label for="txtproQtde">Qtde Estoque:</label>
            <input type="number" step="none" class="form-control" name="txtproQtde" id="txtproQtde" min="0" max="10">
        </div>
        <!-- Grupo de item de formulário com 2 colunas -->
        <div class="d-grid gap-2 col-md-2">
            <label for="btnCalcular"></label>
            <button type="button" onclick="calcular()" name="btnCalcular" id="btnCalcular" class="btn btn-warning">Calcular</button>
        </div>
        <!-- Grupo de item de formulário com 4 colunas -->
        <div class="form-group col-md-4">
            <label for="txtproTotal">Total:</label>
            <input type="text" class="form-control" name="txtproTotal" id="txtproTotal">
        </div>

    </div>
    <!-- Linhas com o bootstrap -->
    <div class="row">
        <!-- Grupo de botão de formulário com 6 colunas -->
        <div class="d-grid gap-2 col-md-6 ">
            <label></label>
            <button type="button" class="btn btn-success" name="btnSalvar" id="btnSalvar">Salvar</button>
        </div>
        <!-- Grupo de botão de formulário com 6 colunas -->
        <div class="d-grid gap-2 col-md-6 ">
            <label></label>
            <button type="button" class="btn btn-danger" name="btnLimpar" id="btnLimpar">Limpar</button>
        </div>
    </div>



    <!-- Adicionando o bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
        function calcular() {
            
            var valorUnitario;
            var valorquantidade;
            var valorTotal;

            valorUnitario = document.getElementById("txtproValor").value;
            valorquantidade = document.getElementById("txtproQtde").value;

            valorTotal = valorUnitario * valorquantidade;

            document.getElementById("txtproTotal").value = valorTotal;

        }
    </script>

</body>

</html>