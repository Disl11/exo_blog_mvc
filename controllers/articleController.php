<?php
class ArticleController
{

    private $model;


    public function __construct($articleModel)
    {
        $this->model = $articleModel;
    }

    public function index()
    {
        $articles = $this->model->getArticles();

        require 'views/articles.php';
    }

    public function show($id)
    {

        $article = $this->model->getArticle($id);
        require 'views/article.php';
    }
}
