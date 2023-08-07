<?php 


namespace app\database\models;

class Marca extends Model
{
  public static string $table = 'marca';
  public readonly int $id;
  public readonly string $nome;
 
}

?>