<div class="jumbotron">
    <h2 class="text-center" class="embed-responsive">
        <a href="index.php?p=admin.accueil.show&club=AÏKIDO CEVENNES LE VIGAN">
            <img class="img-rounded" src="images/logos/logoACV.png" style= "width:100px;height:100px;"></a>
        <a href="index.php?p=admin.accueil.show&club=<?= App::getClub()?>"><?= App::getClub()?></a>
        <a href="index.php?p=admin.accueil.show&club=ARTS MARTIAUX VALLERAUGUE">
            <img class="img-rounded" src="images/logos/logoAMV.jpg" style= "width:100px;height:100px;"></a>
    </h2>
    <h3>Nouveau site d'Aïkido !</h3>
    <p>Site en construction</p>
</div>

<div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-9">
        <!-- Carousel
            ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/acceuil/acceuil.jpg" alt="Aïkido" style=" max-width: 100%; width: auto; height: auto; vertical-align: middle; ">
                    <div class="container">
                        <div class="carousel-caption">
                            <!-- du contenu ici -->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/acceuil/acceuil.jpg" alt="Aïkido" style=" max-width: 100%; width: auto; height: auto; vertical-align: middle; ">
                    <div class="container">
                        <div class="carousel-caption">
                            <!-- du contenu ici -->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/acceuil/acceuil.jpg" alt="Aïkido" style=" max-width: 100%; width: auto; height: auto; vertical-align: middle; ">
                    <div class="container">
                        <div class="carousel-caption">
                            <!-- du contenu ici -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- /.carousel
        ================================================== -->
        <div class="row">  <!-- css!!!... pour sauter une ligne -->
            <p><br/></p>   <!--                                 -->
        </div>             <!--                                 -->

        <div class="row">
            <div class="col-9 col-sm-9 col-lg-6">

                <div  class="modal-content">
                    <a href="index.php?p=admin.accueil.show&club=AÏKIDO CEVENNES LE VIGAN">
                        <img class=" center-block" src="<?php echo "images/logos/logoACV.png";?>"
                             alt="Logo ACV" class="ACV" style= width:200px;height:200px;margin-top:5px;"></a>
                    <p class="text-center">Pour accéder au site<br/> AÏKIDO CEVENNES LE VIGAN <br/>cliquez <a href="index.php?p=accueil.show&club=AÏKIDO CEVENNES LE VIGAN">ici</a></p>
                </div>
                </div><!--/span-->
            <div class="col-9 col-sm-9 col-lg-6">
                <div class="modal-content">
                    <a href="index.php?p=admin.accueil.show&club=ARTS MARTIAUX VALLERAUGUE">
                        <img  class=" center-block" src="<?php echo "images/logos/logoAMV.jpg";?>"
                             alt="Logo AMV" class="AMV" style= width:200px;height:200px;"></a>
                    <p class="text-center">Pour accéder au site<br/> ARTS MARTIAUX VALLERAUGUE <br/>cliquez <a href="index.php?p=accueil.show&club=ARTS MARTIAUX VALLERAUGUE">ici</a></p>
                </div>
            </div><!--/span-->
            <div class="row">  <!-- css!!!... pour sauter une ligne -->
                <p><br/></p>   <!--                                 -->
            </div>             <!--                                 -->
            <div class="row">  <!-- css!!!... pour sauter une ligne -->
                <p><br/></p>   <!--                                 -->
            </div>             <!--                                 -->
            <div class="row">  <!-- css!!!... pour sauter une ligne -->
                <p><br/></p>   <!--                                 -->
            </div>             <!--                                 -->
            <h1>Actualités</h1>
            <?php $cinqueActualites = 0;
            foreach ($articles as $article):
                if ($cinqueActualites < 5) { ?>

                    <div class="panel">
                    <div class="col-9 col-sm-9 col-lg-6">
                        <h2><a href="<?= $article->url ?>"><?= $article->titre; ?></a></h2>
                            <p><?= $article->extrait; ?></p>
                        </div><!--/span-->
                    <img class="img-responsive" src="images/acceuil/imageParDefaut.png"">
                </div>
            <?php
                $cinqueActualites++;
            }
            endforeach;
            ?>
        </div><!--/span-->
    </div><!--/span-->
    <?php require ROOT . '/app/Views/admin/menu.php';?>
      </div><!--/row-->



