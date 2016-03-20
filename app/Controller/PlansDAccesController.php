<?php
/**
 * Created by PhpStorm.
 * User: corentin
 * Date: 15/03/16
 * Time: 17:13
 */

namespace App\Controller;


class PlansDAccesController extends AppController
{
    public function index(){
        // affiche la vue
        $this->render('plansDAcces.index');
    }
}