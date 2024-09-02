<?php
    namespace Projeto\ProjetoEstacionamento\PHP;

    Use Projeto\ProjetoEstacionamento\PHP\Entrada;

    Class Entrada{
        protected string $codigoentrada;
        protected string $dataEntrada;
        protected float $horaEntrada;

        public function __construct($codigoEntrada,$dataEntrada, float $horaEntrada){
            $this->codigoEntrada = $codigoEntrada;
            $this->dataEntrada = $dataEntrada;
            $this->horaEntrada = $horaEntrada;
            
        }//fim do construct

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do get

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do set

        public function imprimir():string
        {
            return "<br>Código de entrada: ".$this->codigoEntrada.
            "<br>Data:  ".$this->dataEntrada.
            "<br>Hora:  ".$this->horaEntrada;
        }


    }


?>