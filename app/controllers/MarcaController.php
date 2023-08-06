<?php

namespace app\controllers;

use app\library\View;
use app\library\Redirect;
use app\database\models\Marca;
use Exception;


class MarcaController
{
 
    public function index()
    {
        $model = marca::all('id, nomeMarca');

       // var_dump($model);
       // die();
    
        View::render('marca', ['model' => $model]);

      // return View::render('marca');
    }
  
    public function store()
    {
  
      $email = strip_tags($_POST['email']);
      $password = strip_tags($_POST['password']);
  
      $user = User::where('email', $email);
  
      if (!$user) {
        throw new Exception("Usuário ou senha inválidos");
      }
  
      if (!password_verify($password, $user->password)) {
        throw new Exception("Usuário ou senha inválidos");
      }
  
      Auth::loginAs($user);
  
      return Redirect::to('/');
    }
  
    public function destroy()
    {
      Auth::logout();
  
      return Redirect::back();
    }
}