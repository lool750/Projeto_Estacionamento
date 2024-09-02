<?php

    namespace Projeto\ProjetoEstacionamento\PHP;

    Use Projeto\ProjetoEstacionamento\PHP\Mensalista;

    class Mensalista{
        protected string $nome;
        protected string $telefone;
        protected string $endereco;
        protected string $carro;
        protected string $placa;
        protected string $corCarro;
        protected string $dataPagamento;
        protected string $valorMensal;
    

        public function __construct(string $nome, string $telefone, string $endereco, string $carro, string $placa, string $corCarro, string $dataPagamento, string $valorMensal){
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->carro = $carro;
            $this->placa = $placa;
            $this->corCarro = $corCarro;
            $this->dataPagamento = $dataPagamento;
            $this->valorMensal = $valorMensal;
        }//fim do construct

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
            return  "<br>Nome: ".$this->nome.
            "<br>Telefone: ".$this->telefone.
            "<br>Endereço: ".$this->endereco.
            "<br>Carro: ".$this->carro.
            "<br>Placa: ".$this->placa.
            "<br>Cor do Carro: ".$this->corCarro.
            "<br>Data de Pagamento: ".$this->dataPagamaneto.
            "<br>Valor Mensal: ".$this->valorMensal;
        }//fim imprimir
    }


?>