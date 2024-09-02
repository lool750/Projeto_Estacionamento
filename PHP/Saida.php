<?php
    namespace Projeto\ProjetoEstacionamento\PHP;

    Use Projeto\ProjetoEstacionamento\PHP\Saida;

    require_once ("Entrada.php");
    
    class Saida{
        protected string $codigoSaida;
        protected string $dataSaida;
        protected float $horaSaida;
        //o hora entrada e saida vai ter que ser mudado para o tipo int ou float pois é com eles que vou fazer o calculo do valor final.

        public function __construct(string $codigoSaida, string $dataSaida, float $horaSaida){
            $this->codigoSaida = $codigoSaida;
            $this->dataSaida = $dataSaida;
            $this->horaSaida = $horaSaida;
        }//fim do construct

        public function valorTotal($horaSaida, $horaEntrada){
            $total = $horaSaida - $horaEntrada;
            if($total < 1){
                return "Valor total: 5,00 R$";

            }else{
                return "Valor total: ".$total * 10 ."R$";
            }    
        }//fim valorTotal


        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do gets

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do sets

        public function imprimir():string
        {
            return "<br>Código saída: ".$this->codigoSaida.
            "<br>Data de saída: ".$this->dataSaida.
            "<br>Horário da saida: ".$this->horaSaida ."<br>";
        }//fim imprimir

    }


?>