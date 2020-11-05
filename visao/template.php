<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Cromossomos Legais</title>
        <base href="<?= BASE_URL ?>">
        
        <!-- Bootstrap core CSS -->
        <link href="publico/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="publico/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template -->
        <link href="publico/css/agency.min.css" rel="stylesheet">
        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link  rel="stylesheet" href="./publico/css/game.css">
        <link  rel="stylesheet" href="./publico/css/form.css">
        <link  rel="stylesheet" href="./publico/css/estilo.css">


        <!--<link rel="stylesheet" href="./publico/css/app.css">-->

        <link rel="icon" href="./publico/img/core-img/compact-disc.png">
        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="./publico/style.css">


    </head>
    <body onload="GameControl.createGame()">
        <?php require "visao/cabecalho.php"; ?>

        <div class="container">
            <?php alertComponentRender(); ?>
        </div>

        <main>
            <?php require $viewFilePath; ?>
        </main>

        <?php require "visao/rodape.php"; ?>


        
        
        
        <!-- ##### All Javascript Script ##### -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
        <!-- jQuery-2.2.4 js -->
        <script src="./publico/js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="./publico/js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="./publico/js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="./publico/js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="./publico/js/active.js"></script>

        <script src="./publico/js/form.js"></script>
       <!-- <script src="./publico/js/galeria.js"></script> -->

    </body>
</html>