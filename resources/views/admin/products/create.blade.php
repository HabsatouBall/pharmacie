@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.product.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.products.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.product.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($product) ? $product->name : '') }}">
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('global.product.fields.description') }}</label>
                <textarea id="description" name="description" class="form-control ">{{ old('description', isset($product) ? $product->description : '') }}</textarea>
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.description_helper') }}
                </p>
            </div>
            
            <div class="form-group {{ $errors->has('categorie_id') ? 'has-error' : '' }}">
                <label for="categorie_id">categorie_id</label>
                <input type="number" id="categorie_id" name="categorie_id" class="form-control" value="{{ old('categorie_id', isset($product) ? $product->categorie_id : '') }}" step="0.01">
                @if($errors->has('categorie_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('categorie_id') }}
                    </em>
                @endif
                <p class="helper-block">
                   
                </p>
                <div class="form-group {{ $errors->has('prixAchat') ? 'has-error' : '' }}">
                <label for="prixAchat">prixAchat</label>
                <input type="number" id="prixAchat" name="prixAchat" class="form-control" value="{{ old('prixAchat', isset($product) ? $product->prixAchat : '') }}" step="0.01">
                @if($errors->has('prixAchat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('prixAchat') }}
                    </em>
                @endif
                 <div class="form-group {{ $errors->has('prixVente') ? 'has-error' : '' }}">
                <label for="prixVente">prixVente</label>
                <input type="number" id="prixVente" name="prixVente" class="form-control" value="{{ old('prixVente', isset($product) ? $product->prixVente : '') }}" step="0.01">
                @if($errors->has('prixVente'))
                    <em class="invalid-feedback">
                        {{ $errors->first('prixVente') }}
                    </em>
                @endif
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection