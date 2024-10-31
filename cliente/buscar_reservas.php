<!DOCTYPE html>

<?php
// Inicia a sessão.
session_start();
if (isset($_SESSION['cpf'])) {
    $cpf = $_SESSION['cpf'];
    $tipo = $_SESSION['tipo'];
} else {
    $tipo = '';
}

?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../icon.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../icon.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
    <div id="wrapper1">
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <div id="wrapper1">
                        <div id="espaço_container" class="container">
                            <div id="logo_site">
                                <img src="../images/carros_logo.png" alt="some text" width=940 height=200>
                            </div>
                        </div>
                    </div>
                    <h1><a href="#">A AUTORENT oferece aluguel de carros 100% elétricos para você explorar o mundo com conforto e sustentabilidade, reduzindo o impacto ambiental. Alugue e faça a diferença!</a></h1>
                    <br>
                    <form enctype="multipart/form-data" method="POST" action="../indexCliente.php">
                        <button type="submit" id="botaovoltar" class="button">
                            Voltar para o menu principal
                        </button>
                    </form>
                    <?php
                include_once "../bd.php";

                #SQL para listagem
                $query = "SELECT c.cod_cliente FROM cliente c, usuario u WHERE u.cpf = '$cpf'";
                $stm = $db->prepare($query);
                if ($stm->execute()) {
                    while ($row = $stm->fetch()) {
                        $codCliente = $row[0];

                        $query2 = "SELECT * FROM reserva WHERE cod_cliente = '$codCliente'";
                        $stm2 = $db->prepare($query2);
                        if ($stm2->execute()) {
                            while ($row = $stm2->fetch()) {
                                $codautomovel = $row['cod_automovel'];
                                $status = $row['status'];
                                $codlocacao = $row['cod_locacao'];
                                $codreserva=$row['cod_reserva'];

                                $query3 = " SELECT * FROM locacao WHERE cod_locacao = '$codlocacao' ";
                                $stm3 = $db->prepare($query3);
                                if ($stm3->execute()) {
                                    while ($row = $stm3->fetch()) {
                                        $valortotal = $row['valor_total'];
                                        $datadevolucao = $row['data_devolucao'];
                                        $datalocacao = $row['data_alocacao'];

                                        $query4 = " SELECT * FROM automovel WHERE placa = '$codautomovel' ";
                                        $stm4 = $db->prepare($query4);
                                        if ($stm4->execute()) {
                                            while ($row = $stm4->fetch()) {
                                                $modelocarro = $row['marca'];
                                                $tipocarro = $row['tipo'];
                                                
                                                echo " 
                                                            <div id='wrapper_carros'>
                                                            <div id='portfolio' class='container_carros'>
                                                                <div class='column10'>
                                                                    <div class='boxcar'>
                                                                        <span class='icon icon-shopping-cart'></span>							
                                                                        <h33><strong>Carro: </strong>$modelocarro</h33>							
                                                                        <h33><strong>Tipo do carro: </strong>$tipocarro</h33>
                                                                        <h33><strong>Data locação: </strong>$datalocacao</h33>
                                                                        <h33><strong>Data Devolução: </strong>$datadevolucao</h33>
                                                                        <h33><strong>Valor total:  </strong> $valortotal</h33>
                                                                        <h33><strong>reserva:  </strong> $codreserva</h33>
                                                                        <h33><strong>locação:  </strong> $codlocacao</h33>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>";
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                ?>
                </div>
               

            </div>
            <div id="espaço_container" class="container">
                <div class="title">
                    <h2>Acesse nossas redes sociais!</h2>
                    <span class="byline">Estamos sempre a disposição para melhor atendê-los!</span>
                </div>
                <ul class="contact">
                <li><a href="https://twitter.com" class="icon icon-twitter" target="_blank"><span>Twitter</span></a></li>
<li><a href="https://facebook.com" class="icon icon-facebook" target="_blank"><span>Facebook</span></a></li>
<li><a href="https://pinterest.com" class="icon icon-dribbble" target="_blank"><span>Pinterest</span></a></li>
<li><a href="https://plus.google.com" class="icon icon-tumblr" target="_blank"><span>Google+</span></a></li>
<li><a href="https://pinterest.com" class="icon icon-rss" target="_blank"><span>Pinterest</span></a></li>

                </ul>
                <div id="espaço_container" class="container">
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>