<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
    <div class="list-group">
        <a href="" class="list-group-item active"><i class="icon-align-justify"></i> Menu</a><!-- icon a revoir-->
        <a href="#" class="list-group-item">Videos</a>
        <a href="#" class="list-group-item">Galerie photo</a>
        <a href="#" class="list-group-item">Techniques</a>
        <a href="index.php?p=FAQ.show&club=<?= App::getClub() ?>" class="list-group-item">FAQ</a>
        <a href="#" class="list-group-item">Livre D'or</a>
        <a href="index.php?p=archives.show&club=<?= App::getClub() ?>" class="list-group-item">Archives</a>
    </div>
    <?php if (App::getClub() == 'AÏKIDO CEVENNES LE VIGAN' ) { ?>
        <div id="cont_MzAzNTB8NXwxfDN8MXxCQkUwRkZ8MXxGRkZGRkZ8Y3wx"><div id="spa_MzAzNTB8NXwxfDN8MXxCQkUwRkZ8MXxGRkZGRkZ8Y3wx"><a id="a_MzAzNTB8NXwxfDN8MXxCQkUwRkZ8MXxGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/le-vigan_v30350/" target="_blank" style="color:#333;text-decoration:none;">Météo Le Vigan</a> ©<a href="http://www.meteocity.com">meteocity.com</a></div><script type="text/javascript" src="http://widget.meteocity.com/js/MzAzNTB8NXwxfDN8MXxCQkUwRkZ8MXxGRkZGRkZ8Y3wx"></script></div>
    <?php } ?>
    <?php if (App::getClub() == 'ARTS MARTIAUX VALLERAUGUE' ) { ?>
        <div id="cont_MzAzMzl8NXwxfDN8MXxCQkUwRkZ8MXxGRkZGRkZ8Y3wx"><div id="spa_MzAzMzl8NXwxfDN8MXxCQkUwRkZ8MXxGRkZGRkZ8Y3wx"><a id="a_MzAzMzl8NXwxfDN8MXxCQkUwRkZ8MXxGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/valleraugue_v30339/" target="_blank" style="color:#333;text-decoration:none;">Météo Valleraugue</a> ©<a href="http://www.meteocity.com">meteocity.com</a></div><script type="text/javascript" src="http://widget.meteocity.com/js/MzAzMzl8NXwxfDN8MXxCQkUwRkZ8MXxGRkZGRkZ8Y3wx"></script></div>
    <?php } ?>

</div><!--/span-->