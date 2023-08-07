<?php

namespace app\controllers;

use app\database\models\Anuncio;
use app\database\models\Marca;
use app\database\models\Modelo;
use app\library\Cart;
use app\library\View;
use app\database\models\User;
use app\database\models\Product;

class HomeController
{
  public function index()
  {
    $model = Anuncio::all('id, Descricao, PrecoVenda');

    //var_dump($products);
  //  die();

    View::render('home', ['model' => $model]);
  }
}
