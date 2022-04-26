@extends('theme.backoffice.layouts.admin')
@section('title','Dar de alta un nuevo usuario')
@section('head')
@endsection
@section('breadcrumbs')
    <li><a href="{{route('backoffice.user.index')}}">Usuarios del sistema</a></li>

@endsection
@section('content')
    <div class="section">
        <p class="caption">Introduce los datos para la creacion de un nuevo usuario</p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <form class="col s12 m8 offset-m2" method="post" action="{{route('backoffice.user.store')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="role" id="role" required="">
                                <option value="" disabled="" selected="" >--Selecciona un rol--</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" data-length="10" name="name">
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
                            <input id="dob" type="date" data-length="10" name="dob">
                            @error('dob')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email"  name="email">
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
                            <input id="password" type="password" name="password">
                            <label for="password">Contraseña</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password_confirmation" type="password" name="password_confirmation">
                            <label for="password_confirmation">Confirmar contraseña</label>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
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
