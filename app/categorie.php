<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
	use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'commande_id',
        'code',
        'libelle',
        'created_at',
        'updated_at',
        'deleted_at',
       
    ];

}
