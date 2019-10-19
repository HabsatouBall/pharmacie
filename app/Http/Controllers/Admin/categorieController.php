<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categorieController extends Controller {

Public function create()
    {
        abort_unless(\Gate::allows('categorie_create'), 403);

        return view('admin.categorie.create');
    }

}