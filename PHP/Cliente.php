<?php

    namespace Projeto\ProjetoEstacionamento\PHP;
    
    Use Projeto\ProjetoEstacionamento\PHP\Cliente;

    Class Cliente{
        protected string $nome;
        protected string $endereco;
        protected string $carro;

        public function __construct(string $nome, string $endereco, string $carro){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->carro = $carro;
        }//fim construct

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
            return "<br>Nome: ".$this->nome.
            "<br>Endereço: ".$this->endereco.
            "<br>Carro: ".$this->carro;

            
        }







    }









?>