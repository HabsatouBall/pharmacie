@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Ajouter Une Nouvelle Commande<!-- {{ trans('global.create') }} {{ trans('global.commandes.title_singular') }} -->
    </div>

    <div class="card-body">
          <form action="{{ route("admin.commandes.store") }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                <label for="nom">Libelle</label>
                <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom', isset($commandes) ? $commandes->nom : '') }}">
                @if($errors->has('nom'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </em>
                @endif
                <p class="helper-block">

                </p>
            </div>
            @csrf
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                <label for="nom">Numero</label>
                <input type="text" id="numero" name="numero" class="form-control" value="{{ old('nom', isset($commandes) ? $commandes->nom : '') }}">
                @if($errors->has('nom'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </em>
                @endif
                <p class="helper-block">

                </p>
            </div>

            <div class="form-group {{ $errors->has('NombreTotal') ? 'has-error' : '' }}">
                <label for="NombreTotal">NombreTotal</label>
                <input type="number" id="NombreTotal" name="NombreTotal" class="form-control" value="{{ old('NombreTotal', isset($commandes) ? $commandes->NombreTotal : '') }}" step="0.01">
                @if($errors->has('NombreTotal'))
                    <em class="invalid-feedback">
                        {{ $errors->first('NombreTotal') }}
                    </em>
                @endif
                <p class="helper-block">

                </p>
            </div>
             @csrf
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                <label for="nom">Montant Total</label>
                <input type="number" id="montantTotal" name="montantTotal" class="form-control" value="{{ old('nom', isset($commandes) ? $commandes->nom : '') }}">
                @if($errors->has('nom'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="Enregistrer">
            </div>
        </form>
    </div>
</div>

@endsection
