<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categorie;

class categorieController extends Controller {

  public function index()
  {
      abort_unless(\Gate::allows('commande_create'), 403);

      $categories = Categorie::all();

      return view('admin.categories.index', compact('categories'));
  }

Public function create()
    {
        abort_unless(\Gate::allows('categorie_create'), 403);

        return view('admin.categorie.create');
    }

}
