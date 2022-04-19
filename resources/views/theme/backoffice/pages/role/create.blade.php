@extends('theme.backoffice.layouts.admin')
@section('title','Crear rol')
@section('head')
@endsection
@section('content')
    <div class="section">
        <p class="caption">Introduce los datos para la creacion de un rol</p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <form class="col s12 m8 offset-m2" method="post" action="{{route('backoffice.role.store')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" type="text" data-length="10" name="name">
                            <label for="name">Nombre del rol</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="description" class="materialize-textarea" data-length="120" name="description"></textarea>
                            <label for="description">Descripcion</label>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right" type="submit" >Guardar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
@section('foot')
@endsection
