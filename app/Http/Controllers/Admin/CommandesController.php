<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCommandesRequest;
use App\Http\Requests\StoreCommandesRequest;
use App\Http\Requests\UpdateCommandesRequest;
use App\Commandes;

class CommandesController extends Controller
{
    public function index()
    {
        // abort_unless(\Gate::allows('commandes_access'), 403);

        $commandes = Commandes::all();

        return view('admin.commandes.index', compact('commandes'));
    }

    public function create()
    {
        // abort_unless(\Gate::allows('commandes_create'), 403);

        return view('admin.commandes.create');
    }

    public function store(StoreCommandesRequest $request)
    {
        // abort_unless(\Gate::allows('commandes_create'), 403);

        $commandes = Commandes::create($request->all());

        return redirect()->route('admin.commandes.index');
    }

    public function edit(Commandes $commandes)
    {
        // abort_unless(\Gate::allows('commandes_edit'), 403);

        return view('admin.commandes.edit', compact('commandes'));
    }

    public function update(UpdateCommandesRequest $request, Commandes $commandes)
    {
        // abort_unless(\Gate::allows('commandes_edit'), 403);

        $commandes->update($request->all());

        return redirect()->route('admin.commandes.index');
    }

    public function show(Commandes $commandes)
    {
        // abort_unless(\Gate::allows('commandes_show'), 403);

        return view('admin.commandes.show', compact('commandes'));
    }

    public function destroy(Commandes $commandes)
    {
        // abort_unless(\Gate::allows('commandes_delete'), 403);

        $commandes->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommandesRequest $request)
    {
        Commandes::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
