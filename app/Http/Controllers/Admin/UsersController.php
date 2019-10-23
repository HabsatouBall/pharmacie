<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('user_access'), 403);

        $users = User::all();


        // $fournisseur = DB::table('users')
        //     ->leftJoin('roles', 'users.id', '=', 'roles.user_id')
        //     ->get();
        //     var_dump($fournisseur);
        //     die();

        // $fournisseur = CategoryModel::select('catID', 'catName', 'imgPath')
        //                    ->where('catType', '=', 'Root')
        //                    ->get();
        //
        return view('admin.users.index', compact('users'));
    }

    public function fournisseur()
    {
        abort_unless(\Gate::allows('user_access'), 403);
        /*
        $categories = CategoryModel::select('catID', 'catName', 'imgPath')
                           ->where('catType', '=', 'Root')
                           ->get();
        */

        $users = User::all();

        return view('admin/users/fournisseurs', compact('users'));
    }

    public function client()
    {
        abort_unless(\Gate::allows('user_access'), 403);

        $users = User::all();

        return view('admin/users/clients', compact('users'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('user_create'), 403);

        $roles = Role::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        abort_unless(\Gate::allows('user_create'), 403);

        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        abort_unless(\Gate::allows('user_edit'), 403);

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        abort_unless(\Gate::allows('user_edit'), 403);

        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_unless(\Gate::allows('user_show'), 403);

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_unless(\Gate::allows('user_delete'), 403);

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
