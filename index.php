<?php
    require_once "controllers/imcController.class.php";

    $controller = new imcController();
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['peso'])){
        $controller->calcular();
        exit;
    }

    if(isset($_GET['menu']) && $_GET['menu'] == 'formulario'){
        $controller->exibirForm();
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FontAwesome para o ícone de carregamento -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <title>Calculo de IMC</title>
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
        #comecar{
            text-decoration: none;
            color: black;
            font-size: 20px;
        }
        #comecar:hover{
            
        }
    </style>
</head>
<!-- Fazer pagina de bem vindo -->
<body class="d-flex flex-column justify-content-between vh-100">
    <header class="d-flex justify-content-between align-items-center header border-bottom">
        <div>
            <img src="assets/imagens/fateclogo2.png" alt="Logo Esquerda (Fatec Jahu)" height="60" />
        </div>
        <div class="mx-auto">
            <img src="assets/imagens/centro-paula-souza-logo.svg" alt="Logo Centro (CPS)" height="60" />
        </div>
        <div>
            <img src="assets/imagens/fateclogo1.png" alt="Logo Direita (DSM)" height="60" />
        </div>
    </header>
    <div class="d-flex flex-column justify-content-between align-items-center">
        <h1>Cálculo de IMC — Índice de Massa Corpórea.</h1>
        <h3>Formulário para calcular o seu índice de massa corporal.</h3>
        <a href="views/splashscreen.php" id="comecar" style="margin-top: 25px">Começar a calcular.</a>
    </div>
    <footer class="footer text-center">
        <p>&copy; Todos os direitos reservados. Faculdade de Tecnologia de Jahu, 2026. </p>
    </footer>
</body>
</html>