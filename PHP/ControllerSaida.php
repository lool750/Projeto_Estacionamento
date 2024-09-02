<?php
    namespace Projeto\ProjetoEstacionamento\PHP;

    require_once("Saida.php");
    require_once("Entrada.php");
    
    Use Projeto\ProjetoEstacionamento\PHP\ControllerSaida;
    Use Projeto\ProjetoEstacionamento\PHP\Saida;
    Use Projeto\ProjetoEstacionamento\PHP\Entrada;
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
                    <span class="navbar-brand mb-0 h1">Cadastrar Saída</span>
                </div>
            </nav>
            <form method="POST">

                <label>Codigo Saida</label>
                <input type="text" id="codigoSaida" name="codigoSaida"/><br><br>

                <label>Data Entrada</label>
                <input type="date" id="dataEntrada" name="dataEntrada"/><br><br>

                <label>Hora Entrada</label>
                <input type="number" id="horaEntrada" name="horaEntrada"/><br><br>
                
                <label>Data Saida</label>
                <input type="date" id="dataSaida" name="dataSaida"/><br><br>

                <label>Hora Saida</label>
                <input type="number" id="horaSaida" name="horaSaida"/><br><br>

                <button>Cadastrar
                <?php
                    try{       
                        $codigoSaida = $_POST['codigoSaida'];
                        $dataEntrada = $_POST['dataEntrada'];
                        $horaEntrada = $_POST['horaEntrada'];
                        $dataSaida = $_POST['dataSaida'];
                        $horaSaida = $_POST['horaSaida'];
                        $saida1 = new Saida($codigoSaida,$dataSaida,(float)$horaSaida);
                    }catch(Exception $erro){
                        echo $erro;
                    }//fim do try_catch    
                ?>
                </button><br><br>
                <?php echo "Nota:";
                 echo $saida1->imprimir();
                 echo $saida1->valorTotal((float)$horaSaida,(float)$horaEntrada);
                ?>


            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
        </body>
</HTML>
