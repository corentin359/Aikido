<?php

namespace Core\Controller;

class Controller{
    /**
     * @var Un chemin vers un dossier qui contient une vues
     */
    protected $viewPath;
    /**
     * @var Un template
     */
    protected $template;
    /**
     * render Génère les vues.
     * @param $view la vue a aficher
     * @param array $variables recuperer les modèles, (exemple : transfert des variables articles et categories de index de PostController)
     */
    protected function render($view, $variables = []){
        ob_start();
            extract($variables);// vérifie chaque clé afin de contrôler si elle a un nom de variable valide.
            require($this->viewPath . str_replace('.', '/', $view) . '.php');

        $content = ob_get_clean();
        $getAdmin = explode('.', $view);
        if($getAdmin[0] == 'admin'){
            $this->template = 'adminTemplate';
        }
        else {
            $this->template = 'default';
        }
            require($this->viewPath . 'templates/' . $this->template . '.php');


    }
    // Page interdit
    protected function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Acces interdit');
    }
    // Page pas trouvé
    protected function notFound(){
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }

}