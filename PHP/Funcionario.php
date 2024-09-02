<?php
    
    namespace Projeto\ProjetoEstacionamento\PHP;


    Use Projeto\ProjetoEstacionamento\PHP\Funcionario;


    Class Funcionario{
        protected string $codigo;
        protected string $nascimento;
        protected string $salario;
        protected string $cargo;
        protected string $nome;
        protected string $endereco;
        protected string $telefone;

        public function __construct(string $codigo, string $nascimento, string $salario, string $cargo, string $nome, string $telefone, string $endereco){
            $this->codigo = $codigo;
            $this->nascimento = $nascimento;
            $this->salario = $salario;
            $this->cargo = $cargo;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
        }//fim construtor com parent

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim dos gets

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do sets

        public function imprimir():string
        {
            return "<br><br>Código: ".$this->codigo.
            "<br>Data de nascimento: ".$this->nascimento.
            "<br>Salário: ".$this->salario.
            "<br>Cargo: ".$this->cargo.
            "<br>Nome: ".$this->nome.
            "<br>Endereço: ".$this->endereco.
            "<br>Telefone: ".$this->telefone;

        }
        




    }









?>
