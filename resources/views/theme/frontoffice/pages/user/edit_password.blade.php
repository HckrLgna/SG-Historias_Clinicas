@extends('theme.frontoffice.layouts.main')
@section('title','Cambiar contraseña')
@section('head')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            {{--menu lateral--}}
            @include('theme.frontoffice.pages.user.includes.nav')
            {{--seccion columna principal--}}
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">
                            @yield('title')
                        </span>
                        <div class="row">
                            <form action="{{route('frontoffice.user.change_password' )}}" class="col s12" method="post">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="row">
                                    <div class="input-field cols12">
                                        <input type="password" name="old_password" id="old_password">
                                        <label for="old_password">Contraseña actual</label>
                                        @error('old_password')
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field cols12">
                                        <input type="password" name="password" id="password">
                                        <label for="password">Nueva contraseña</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field cols12">
                                        <input type="password" name="password_confirmation" id="password_confirm">
                                        <label for="password_confirm">Confirmar contraseña</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn waves-effect waves-light right" type="submit">Actualizar <i class="material-icons right">send</i> </button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
@endsection
