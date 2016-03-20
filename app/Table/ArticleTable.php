<?php
namespace App\Table;
use Core\Table\Table;

class ArticleTable extends Table{
    protected $table = 'articles';
    /**
     * Récupère les derniers article
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT A.id, A.titre, A.contenu, A.date, C.titre as categorie
            FROM articles A
            LEFT JOIN categories C ON A.category_id = C.id
            ORDER BY A.date DESC");
    }
    /**
     * Récupère les derniers articles de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastByCategory($category_id){
        return $this->query("
            SELECT A.id, A.titre, A.contenu, A.date, C.titre as categorie
            FROM articles A
            LEFT JOIN categories C ON A.category_id = C.id
            WHERE A.category_id = ?
            ORDER BY A.date DESC", [$category_id]);
    }
    /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\ArticleEntity
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT A.id, A.titre, A.contenu, A.date, C.titre as categorie
            FROM articles A
            LEFT JOIN categories C ON A.category_id = C.id
            WHERE A.id = ?", [$id], true);
    }
}