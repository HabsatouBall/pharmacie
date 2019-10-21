@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        ajouter commande<!-- {{ trans('global.create') }} {{ trans('global.commandes.title_singular') }} -->
    </div>
      @csrf
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                <label for="nom">statut</label>
                <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom', isset($commandes) ? $commandes->nom : '') }}">
                @if($errors->has('nom'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </em>
                @endif
                <p class="helper-block">
                  
                </p>
    <div class="card-body">
        <form action=""  enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                <label for="nom">nom</label>
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
                <label for="nom">numero</label>
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
                <label for="nom">date</label>
                <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom', isset($commandes) ? $commandes->nom : '') }}">
                @if($errors->has('nom'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </em>
                @endif
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
                <label for="nom">prix</label>
                <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom', isset($commandes) ? $commandes->nom : '') }}">
                @if($errors->has('nom'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </em>
                @endif
                <p class="helper-block">
                  
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="enregistrer">
            </div>
        </form>
    </div>
</div>

@endsection