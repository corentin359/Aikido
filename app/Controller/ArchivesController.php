<?php
/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 15/03/16
 * Time: 15:22
 */

namespace App\Controller;


class ArchivesController  extends ArticlesController
{
    public function __construct(){
        parent::__construct();
    }

    public function show()
    {
        parent::getUneCategorie(1,'archives.index');
    }

}