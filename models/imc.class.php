<?php
    class IMC{
        public function __construct(private float $peso=0.00, private float $altura=0.00, private float $imc=0.00){}

        #region getters
        public function getPeso(){
            return $this->peso;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function getIMC(){
            return $this->imc;
        }
        #endregion

        #region setters
        public function setPeso(float $peso){
            $this->peso = $peso;
        }

        public function setAltura(float $altura){
            $this->altura = $altura;
        }
        #endregion

        public function calculoIMC(){
            if ($this->altura > 0){
                $this->imc = $this->peso / ($this->altura ** 2);
            }
        }

        public function Classificacao(){
            # nao faz regime
            if($this->imc < 18.5) return "Abaixo do peso normal.";
            if($this->imc <= 24.9) return "Peso normal";

            # faz regime
            if($this->imc <= 29.9) return "Sobrepeso.";
            if($this->imc <= 34.9) return "Obesidade grau 1.";
            if($this->imc <= 39.9) return "Obesidade grau 2.";
            if($this->imc >= 40) return "Obesidade grau 3 | Obesidade mórbida.";
        }

        public function Cores(){
            if($this->imc < 18.5) return "#E91C1D";
            if($this->imc <= 24.9) return "#B7CD26";
            if($this->imc <= 29.9) return "#F3B703";
            if($this->imc <= 34.9) return "#F39206";
            if($this->imc <= 39.9) return "#EC581D";
            if($this->imc >= 40) return "#C6181C";
        }

        public function Recomendacao(){
            return ($this->imc >= 25) ? "Sim, precisa fazer regime." : "Não, não precisa fazer regime.";
        }
    }
?>