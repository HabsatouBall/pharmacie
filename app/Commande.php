<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
  protected $dates = [
      'created_at',
      'updated_at',
      'deleted_at',
  ];

  protected $fillable = [
      'id',
      'user_id',
      'nom',
      'numero',
      'NombreTotal',
      'montantTotal',
      'statut',
      'created_at',
      'updated_at',
      'deleted_at',

  ];

}
