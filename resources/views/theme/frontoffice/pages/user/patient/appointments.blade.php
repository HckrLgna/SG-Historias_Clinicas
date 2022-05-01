@extends('theme.frontoffice.layouts.main')
@section('title','Mis citas ')
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
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Especialidades</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
@endsection
