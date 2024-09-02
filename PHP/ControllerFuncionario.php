<?php
    namespace Projeto\ProjetoEstacionamento\PHP;

    require_once ("Funcionario.php");

    Use Projeto\ProjetoEstacionamento\PHP\ControllerFuncionario;
    Use Projeto\ProjetoEstacionamento\PHP\Funcionario;
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
                    <span class="navbar-brand mb-0 h1">Cadastrar Funcionário</span>
                </div>
            </nav>



            <form method="POST">

                <label>Codigo Funcionario</label>
                <input type="text" id="codigo" name="codigo"/><br><br>

                <label>Data de nascimento</label>
                <input type="text" id="nascimento" name="nascimento"/><br><br>

                <label>Salário</label>
                <input type="text" id="salario" name="salario"/><br><br>

                <label>Cargo</label>
                <input type="text" id="cargo" name="cargo"/><br><br>

                <label>Nome</label>
                <input type="text" id="nome" name="nome"/><br><br>

                <label>Endereço</label>
                <input type="text" id="endereco" name="endereco"/><br><br>

                <label>Telefone</label>
                <input type="number" id="telefone" name="telefone"/><br><br>

                <button>Cadastrar
                <?php
                    try{       
                        $codigo = $_POST['codigo'];
                        $nascimento = $_POST['nascimento'];
                        $salario = $_POST['salario'];
                        $cargo= $_POST['cargo'];
                        $nome = $_POST['nome'];
                        $endereco = $_POST['endereco'];
                        $telefone = $_POST['telefone'];
                        $funcionario1 = new Funcionario($codigo,$nascimento,$salario,$cargo,$nome,$endereco,$telefone);
                    }catch(Exception $erro){
                        echo $erro;
                    }//fim do try_catch    
                ?>
                </button><br><br>
                <?php echo $funcionario1->imprimir();?>


            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
        </body>
</HTML>



