<?php

namespace App\Http\Requests;

use App\Commandes;
use Illuminate\Foundation\Http\FormRequest;

class StoreCommandesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('commandes_create');
    }

    public function rules()
    {
        return [
            'nom' => [
                'required',
            ],
        ];
    }
}
