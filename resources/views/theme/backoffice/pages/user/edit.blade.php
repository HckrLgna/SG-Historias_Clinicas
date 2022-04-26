@extends('theme.backoffice.layouts.admin')
@section('title','Editar'.$user->name)
@section('head')
@endsection
@section('breadcrumbs')
    <li><a href="{{route('backoffice.user.index')}}">Usuarios del sistema</a></li>
    <li>Editar {{$user->name}}</li>
@endsection
@section('content')
    <div class="section">
        <p class="caption">Actualiza los datos del usuario</p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <form class="col s12 m8 offset-m2" method="post" action="{{route('backoffice.user.update',$user)}}">
                    {{csrf_field()}}
                    {{method_field('PUT')}}

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" data-length="10" name="name" value="{{$user->name}}">
                            <label for="name">Nombre del Usuario</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="dob" type="date" data-length="10" name="dob" value="{{$user->dob}}">
                            @error('dob')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email"  name="email" value="{{$user->email}}">
                            <label for="email">Correo electronico</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
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
