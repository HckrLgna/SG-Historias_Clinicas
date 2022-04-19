@extends('theme.backoffice.layouts.admin')
@section('title','Editar rol: '. $role->name )
@section('head')
@endsection
@section('breadcrumbs')
    <li><a href="{{route('backoffice.role.index')}}">Roles del sistema</a></li>
    <li><a href="{{route('backoffice.role.show',$role)}}"></a>{{$role->name}}</li>
    <li>Edicion de rol</li>
@endsection
@section('content')
    <div class="section">
        <p class="caption"> <b>Edicion del rol :</b>  {{$role->name}}</p>
        <div class="divider"></div>
        <div class="section">
            <h4 class="header2">Editar rol</h4>
            <div class="row">
                <form class="col s12 m8 offset-m2" method="post" action="{{route('backoffice.role.update',$role)}}">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" type="text" data-length="10" name="name" value="{{$role->name}}">
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
                            <textarea id="description" class="materialize-textarea" data-length="120" name="description" >{{$role->description}}</textarea>
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
