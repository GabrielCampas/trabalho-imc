<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Resultados Finais</title>
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
            margin-top: 620px;
        }
        #text-resultados-finais{
            margin-top: 30px;
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
    <h1 class="text-center" id="text-resultados-finais">
        Resultados Finais:
    </h1>
    <div class="d-flex justify-content-center">
        <div class="container mb-3 mt-3">
            <label for="valor_altura" class="form-label">Altura: echo $_altura;</label>
            <br>
            <label for="valor_peso" class="form-label">Peso: echo $_peso;</label>
            <br>            
            <label for="valor_imc" class="form-label">IMC: echo $_imc;</label>
            <p><strong>Recomendação:</strong></p>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
        <p>&copy; Todos os direitos reservados. Faculdade de Tecnologia de Jahu, 2026.
        </p>
    </footer>
</body>

</html>