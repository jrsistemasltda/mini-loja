<?php 


namespace app\database\models;

class Modelo extends Model
{
  public static string $table = 'modelo';
  public readonly int $idMarca;
  public readonly int $id;
  public readonly string $nomeModelo;
 
}

?>