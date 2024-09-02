<?php
    namespace Projeto\ProjetoEstacionamento\PHP;

    require_once ("Mensalista.php");

    Use Projeto\ProjetoEstacionamento\PHP\ControllerMensalista;
    Use Projeto\ProjetoEstacionamento\PHP\Mensalista;
?>    

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/controller.css">


</head>
        <body>

            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Cadastrar Mensalista</span>
                </div>
            </nav>

            <form method="POST">

                <label>Nome</label>
                <input type="text" id="nome" name="nome"/><br><br>

                <label>Endereço</label>
                <input type="text" id="telefone" name="telefone"/><br><br>

                <label>Endereço</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

                <label>Carro</label>
                <input type="text" id="carro" name="carro"/><br><br>

                <label>Placa</label>
                <input type="text" id="placa" name="placa"/><br><br>

                <label>Cor</label>
                <input type="text" id="corCarro" name="corCarro"/><br><br>

                <label>Data de pagamento</label>
                <input type="text" id="dataPagamaneto" name="dataPagamento"/><br><br>

                <label>Valor mensal</label>
                <input type="text" id="valorMensal" name="valorMensal"/><br><br>

                <button>Cadastrar
                <?php
                    try{       
                        $nome = $_POST['nome'];
                        $telefone = $_POST['telefone'];
                        $endereco = $_POST['endereco'];
                        $carro = $_POST['carro'];
                        $placa = $_POST['placa'];
                        $corCarro = $_POST['corCarro'];
                        $dataPagamento = $_POST['dataPagamento'];
                        $valorMensal = $_POST['valorMensal'];
                        $mensalista1 = new Mensalista($nome,$telefone,$endereco,$carro,$placa,$corCarro,$dataPagamento,$valorMensal);
                    }catch(Exception $erro){
                        echo $erro;
                    }//fim do try_catch    
                ?>
                </button><br><br>
                <?php echo $mensalista1->imprimir();?>


            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
        </body>
</HTML>      
