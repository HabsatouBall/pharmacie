<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vente extends Model
{
	use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nom',
        'numero',
        'NombreTotal',
        'montantTotal'
        'created_at',
        'updated_at',
        'deleted_at',
        
    ];

}
