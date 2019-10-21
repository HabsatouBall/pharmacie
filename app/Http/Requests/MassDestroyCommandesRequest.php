<?php

namespace App\Http\Requests;

use App\Commandes;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyCommandesRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('commandes_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:commandes,id',
        ];
    }
}
