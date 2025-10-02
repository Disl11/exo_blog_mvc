<?php

require "models/articleModel.php";
require "controllers/articleController.php";

$model = new ArticleModel();
$controller = new ArticleController($model);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;


$controller->$action($id);
