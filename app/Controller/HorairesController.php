<?php
/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 15/03/16
 * Time: 15:22
 */

namespace App\Controller;


class HorairesController  extends ArticlesController
{
        public function __construct(){
        parent::__construct();
    }

    public function show()
    {
        parent::getUneCategorie(2,'horaires.index');
    }

}