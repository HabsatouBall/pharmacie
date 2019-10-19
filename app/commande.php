<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class commande extends Model
{
	use SoftDeletes;

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
