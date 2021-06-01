<?php function cabecalho() { global $config; ?>
  <!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?=$config['TITULO']?></title>
      <?php inc('bootstrap.min.css'); ?>
      <?php inc('starter-template.css'); ?>


      <style>
            h1{
                text-align: center; 
                color: darkgreen;
            }
            body{
              padding: 0%;
            }
            a:link {
              color: green;
              text-decoration: none;
            }
            a:visited {
              color: blue;
              text-decoration: none;
            }
        </style>

    </head>
    <body>
    <?php navegacao(); ?>
    <main role="main" class="container">
<?php } ?>



<?php function navegacao() { global $config; ?>
  <nav class="navbar navbar-expand-lg navbar-light  " style="background-color: #66eb71;">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">Página Inicial</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link"  href="questao1.php">Países que falam portugues</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="questao2.php"> Cidades brasileiras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="questao3.php">Países sul-americanos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="questao4.php">Países africanos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="questao5.php">Países europeus</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="questao6.php">Países que falam francês</a>
                  </li>                  
                 
                </ul>
              </div>
            </div>
          </nav>
<?php } ?>

<?php function rodape() { ?>
    </main>
    <?php inc('jquery-3.6.0.min.js'); ?>
    <?php inc('popper.min.js'); ?>
    <?php inc('bootstrap.min.js'); ?>
  </body>
</html>
<?php } ?>
