<?php 


namespace app\database\models;

use DateTime;

class Anuncio extends Model
{
  public static string $table = 'anuncio';
  public readonly int $id;
  public readonly string $Descricao;
  public readonly dateTime $DatCad;
  public readonly dateTime $DatVal;
  public readonly int $idVeiculo;
  public readonly float $PrecoVenda;
  public readonly int $Situacao;
 
}

?>