<?php

class ArticleModel
{
    private $articles = [
        1 => "Article 1 : Introduction à MVC",
        2 => "Article 2 : Pourquoi séparer le code ?",
        3 => "Article 3 : Premier mini-projet"
    ];

    public function getArticles()
    {

        return $this->articles;
    }

    public function getArticle($id)
    {
        return $this->articles[$id] ?? "Article introuvable";
    }
}
