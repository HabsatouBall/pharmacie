<?php

namespace App\Http\Requests;

use App\Commandes;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCommandesRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('commandes_edit');
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
