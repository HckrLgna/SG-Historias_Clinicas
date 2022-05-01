@extends('theme.frontoffice.layouts.main')
@section('title','Editar perfil ')
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
                            <form action="{{route('frontoffice.user.update',[$user, 'view=frontoffice'] )}}" class="col s12" method="post">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="row">
                                    <div class="input-field cols12">
                                        <input type="text" name="name" id="name" value="{{$user->name}}">
                                        <label for="name">Nombre de usuario</label>
                                        @error('name')
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="date" name="dob" id="dob" value="{{$user->dob->format('Y-m-d')}}">
                                        <label for="dob">Fecha de nacimiento</label>
                                        @error('dob')
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="email" name="email" id="email" value="{{$user->email}}">
                                        <label for="email">Nombre de usuario</label>
                                        @error('email')
                                        @enderror
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
