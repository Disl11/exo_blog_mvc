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
    }

    public function show($id)
    {

        $article = $this->model->getArticle();
    }
}
