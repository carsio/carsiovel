<?php

namespace App\Model;

use SON\Database\Model;
use SON\Database\Metadata;

/**
* Exemplo de Model
*
*/
class Example extends Model
{
  use Metadata;

  // Metadados
  // protected $primaryKey = "IDTEST";
  // protected $table = "TEST";

  public function myQuery()
  {
    $sql = "SELECT * FROM DUAL";
    $this->execute($sql);
  }

}
