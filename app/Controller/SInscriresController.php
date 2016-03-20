<?php
/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 15/03/16
 * Time: 15:52
 */

namespace App\Controller;


class SInscriresController extends ArticlesController
{
        public function __construct(){
        parent::__construct();
    }

    public function show()
    {
        parent::getUneCategorie(3,'sInscrires.index');
    }
}