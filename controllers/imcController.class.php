<?php
    require_once "models/imc.class.php";

    class imcController{
        public function exibirForm(){
            include "views/imc.php";
        }

        public function calcular(){
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            $imcCalculado = new IMC($peso, $altura);
            $imcCalculado->calculoIMC();

            $valorImc = $imcCalculado->getIMC();
            $classificacao = $imcCalculado->Classificacao();
            $cores = $imcCalculado->Cores();
            $recomendacao = $imcCalculado->Recomendacao();

            include "views/resultado.php";
        }
    }
?>
