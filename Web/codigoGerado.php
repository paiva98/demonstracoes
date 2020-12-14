<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Código</title>
    </head>

    <body>
        <div class="container-fluid" style="background-color: blueviolet; padding: 15px; padding-left: 30px;">
            <h2 style="background-color: transparent; color: white;">Código gerado</h2>
        </div>

        <div class="container" style="margin-top: 50px">
            <div class="row justified-content-md-center">
                <div class="col col-md-5">
                    <?php
                        $arb = 0;
                        $valor = 0;
                        if(!empty($_POST["valor"])){
                            $valor = (float)$_POST["valor"];
                        }

                        $metodo = $_GET['metodo'];
                        require_once "CodigoDePontos.php";

                        $e = new Empresa("cvds", "sd", "sdc", "dfva", "vsdc", "csdcs", "csd", "cds");
                        $gerar = new CodigoDePontos($e, $valor, $arb, "2342", $metodo);
                        echo '<h3>' . $gerar->getCodigo() . '</h3>';

                        $pagina = "";

                        switch ($metodo) {
                            case 'ponto':
                                $pagina = "pontoValor.php";
                                break;
                            
                            case 'compra':
                                $pagina = "pontoPorCompra.php";
                                break;
                
                            case 'arbitrario':
                                $pagina = "pontoArbitrario.php";;
                                break;
                
                            default:
                                break;
                        }
                    ?>

                    <button type="submit" class="btn btn-primary col col-md-4" style="background-color: blueviolet; border-color: blueviolet;">
                    <a href="<?php echo $pagina ?>" class="badge badge-primary" style="background-color: blueviolet;">Voltar</a>
                    </button>
                </div>
            </div>
            
        </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>