@extends('theme.backoffice.layouts.admin')
@section('title','Crear Permiso')
@section('head')
@endsection
@section('breadcrumbs')
    <!--<li><a href="{{route('backoffice.role.index')}}">Permisos</a></li>-->
    <li>Crear Permiso</li>
@endsection
@section('content')
    <div class="section">
        <p class="caption">Introduce los datos para la creacion de un permiso</p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <form class="col s12 m8 offset-m2" method="post" action="{{route('backoffice.permission.store')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" type="text" data-length="10" name="name">
                            <label for="name">Nombre del permiso</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="role_id" id="">
                                <option value=""disabled=""selected="">Selecciona un rol</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: orangered">{{ $message }}</strong>
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
                                        <strong style="color: orangered">{{ $message }}</strong>
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
