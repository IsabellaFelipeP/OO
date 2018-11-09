<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="Marcador.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title> Cadastro de Cliente</title>
</head>

<body>
    <div class="container ">
        <div class="row ">
            <div class = "col-md-12 Marcador">
                <div class = "page-header"> <!--Serve para colocar uma linha embaixo do texto-->
                     <h1> Dados do Cliente</h1>
                </div>
            </div>
         </div>


        <div class = "row">
            <div class = "col-md-6">
                <h3>Cliente</h3>
                    <form role="form" action="Cliente.php" method="get">
                        <div class="form-group"> <!--Agrupar elementos de um formulario-->
                            <label for="Nome">Nome:</label>
                            <input type="text" class="form-control" id="Nome">
                        </div>

                      <!--  <button type="submit" class="btn btn-primary">Consultar</button> -->
                        <a href="Detalhes.php" class="btn btn-primary">Detalhes</a>


                    </form>

            </div>

        </div>

        <form>
            <!--
                       <table class = ".table-bordered">
                        <br>   <div class = mod-md-3>
                        <label for="Nome">Nome:</label>
                        <input type="Nome" class="form-control" id="Nome">

                        </div>

                        </table>


                    </div>
         -->

        </form>
    </div>
<?php

//require_once "Cliente.php";
/*
$dados = array(1 => 'Joao', '02234578923', 'Florida Branca',
               2 => 'Maria', '00123478911', 'Mar Branca',
               3 => 'Carlos', '00345672189', 'Pedra Branca');

var_dump($dados);
*/
?>

</body>
</html>


