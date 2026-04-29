<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>IMC (Índice de Massa Corporal)</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
        .header {
            height: 80px;
            padding: 10px 30px;
        }
        .footer {            
            height: 60px;
            padding: 10px 30px;
        }

        #titulo-calculo{
            margin-top: 55px;
        }

        #footer-calculo{
            margin-top: 430px;
        }
    </style>
</head>
<body> 
    <header class="d-flex justify-content-between align-items-center header border-bottom">
        <div>
            <img src="../assets/imagens/fateclogo2.png" alt="Logo Esquerda (Fatec Jahu)" height="60" />
        </div>
        <div class="mx-auto">
            <img src="../assets/imagens/centro-paula-souza-logo.svg" alt="Logo Centro (CPS)" height="60" />
        </div>
        <div>
            <img src="../assets/imagens/fateclogo1.png" alt="Logo Direita (DSM)" height="60" />
        </div>
    </header>
    <h1 class="text-center" id="titulo-calculo">
        Cálculo do IMC <br>(Índice de Massa Corporal):
    </h1> 
    <div class="d-flex justify-content-center">
    <form class="col-6" action="../index.php" method="post">
        <div class="mb-3 mt-3">
            <label for="peso" class="form-label">Peso:</label>
            <input type="text" class="form-control" id="peso" name="peso" placeholder="Entre com o peso.">
        </div>
        <div class="mb-3">
            <label for="altura" class="form-label">Altura:</label>
            <input type="text" class="form-control" id="altura" name="altura" placeholder="Entre com a altura.">
        </div>
            <button type="submit" id="calcular" class="btn btn-primary">Calcular IMC</button>
            <button type="reset" id="limpar" class="btn btn-danger">Limpar</button>
    </form>
    </div>
    <footer class="footer text-center" id="footer-calculo">
        <p>&copy; Todos os direitos reservados. Faculdade de Tecnologia de Jahu, 2026.
        </p>
    </footer>
</body>
</html>