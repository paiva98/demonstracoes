<?php
require_once "CodigoDePontos.php";
if(!empty($_POST['valor'])) {

    $arb = 0;
    $valor = 0;

    $valor = (float)$_POST["valor"];

    $data = date("d/m/Y");

    $e = new Empresa("cvds", "sd", "sdc", $data, "vsdc", "csdcs", "csd", "cds");
    $gerar = new CodigoDePontos($e, $valor, $arb, "2342", "ponto");
}
?>


<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Gerar Código</title>
    </head>

    <body>
        <div class="container-fluid" style="background-color: blueviolet; padding: 15px;">
            <h2 style="background-color: transparent; color: white;">Gerar Código de Pontos</h2>
        </div>

        <form style="margin-top: 60px;" class="container" method="POST" action="pontoValor.php">
            <div class="row justify-content-md-center">
                <div class="col col-md-6">
                    <input type="text" class="form-control" name="valor" id="valor" placeholder="Digite o valor da compra" required>
                </div>
            </div>

            <br>

            <div class="row justify-content-md-center">
                <button type="submit" class="btn btn-primary col col-md-4" style="background-color: blueviolet; border-color: blueviolet;">Gerar</button>
            </div>

            <br>

            <div class="row justify-content-md-center">
                <div class="col col-md-3" style="background-color: #bdc3c7">
                <?php
                    if(!empty($_POST['valor'])) {
                        echo '<h4>Código gerado: ' . $gerar->getCodigo() . '</h4>';
                        echo '<h4>Pontos: ' . $gerar->getPontos() . '</h4>';
                    }
                ?>
                </div>
            </div>
            
        </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>