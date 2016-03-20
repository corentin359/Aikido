<?php
/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 15/03/16
 * Time: 16:33
 */

namespace App\Controller;


class FAQController extends ArticlesController
{
            public function __construct(){
        parent::__construct();
    }

    public function show()
    {
        parent::getUneCategorie(4,'FAQ.index');
    }
}