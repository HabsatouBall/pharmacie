<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'categorie_id'
        'vente_id'
        'prixVente'
        'prixAchat'
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];
}
