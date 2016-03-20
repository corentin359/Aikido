<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aïkido Cevennes Aigoual</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
      <link href="css/carousel.css" rel="stylesheet">

      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
<?php if (App::getClub() == 'AÏKIDO CEVENNES LE VIGAN' || App::getClub() == 'ARTS MARTIAUX VALLERAUGUE' || App::getClub() == 'AÏKIDO CEVENNES AIGOUAL' ) {?>
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#">Project name</a>-->
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php?p=admin.accueil.show&club=AÏKIDO CEVENNES AIGOUAL">adminAccueil</a></li>
                <li><a href="index.php?p=horaires.show&club=<?= App::getClub() ?>">Horaires</a></li>
                <li><a href="index.php?p=plansDAcces.index&club=<?= App::getClub() ?>">Accès aux dojos</a></li>
                <li><a href="index.php?p=sInscrires.show&club=<?= App::getClub() ?>">S'inscrire</a></li>
                <li><a href="index.php?p=articles.index&club=<?= App::getClub() ?>">Article</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a class="btn btn-success" href="index.php?p=utilisateurs.login">Connection</a></li>-->
                <form method="post" action="index.php?p=utilisateurs.login&club=<?= App::getClub() ?>" class="navbar-form navbar-right" role="form">
                    <button type="submit" class="btn btn-success">Connexion</button>
                </form>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</div><!-- /.navbar -->
<?php } ?>

<div class="container">
    <?= $content; ?>
</div><!-- /.container -->
<div class="container">
    <div class="col12">
        <footer>
            <p><a>Contactez-nous</a> | <a>Mentions légales</a> | <a>Liens</a> </p>
        </footer>
    </div>
</div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/offcanvas.js"></script>
<script src="js/docs.min.js"></script>
    </body>
</html>
