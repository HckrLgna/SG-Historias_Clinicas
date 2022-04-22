@extends('theme.backoffice.layouts.admin')
@section('title','Editar permisos: '. $permission->name )
@section('head')
@endsection
@section('breadcrumbs')
    <li>Editar permiso {{$permission->name}}</li>

@endsection
@section('content')
    <div class="section">
        <p class="caption">Introduce los datos para editar el permiso</p>
        <div class="divider"></div>
        <div class="section">

            <div class="row">
                <form class="col s12 m8 offset-m2" method="post" action="{{route('backoffice.permission.update',$permission)}}">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" data-length="10" name="name" value="{{$permission->name}}">
                            <label for="name">Nombre del permiso</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="role_id" id="">
                                <option value="{{$permission->role->id}}" selected="{{$permission->role->name}}"></option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="description" class="materialize-textarea" data-length="120" name="description" >{{$permission->description}}</textarea>
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
                            <button class="btn waves-effect waves-light right" type="submit" >Actualizar
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
