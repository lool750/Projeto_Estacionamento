<?php
    namespace Projeto\ProjetoEstacionamento\PHP;

    require_once ("Entrada.php");

    Use Projeto\ProjetoEstacionamento\PHP\ControllerEntrada;
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
                <span class="navbar-brand mb-0 h1">Cadastrar Entrada</span>
            </div>
        </nav>

        <form method="POST">

            <label>Codigo Entrada</label>
            <input type="text" id="codigoEntrada" name="codigoEntrada"/><br><br>

            <label>Data Entrada</label>
            <input type="text" id="dataEntrada" name="dataEntrada"/><br><br>

            <label>Hora Entrada</label>
            <input type="number" id="horaEntrada" name="horaEntrada"/><br><br>
            <button>Cadastrar
            <?php
                try{       
                    $codigoEntrada = $_POST['codigoEntrada'];
                    $dataEntrada = $_POST['dataEntrada'];
                    $horaEntrada = $_POST['horaEntrada'];
                    $entrada1 = new Entrada($codigoEntrada,$dataEntrada,(float)$horaEntrada);
                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch    
            ?>
            </button><br><br>
            <?php echo $entrada1->imprimir();?>


        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    </body>
</HTML>

