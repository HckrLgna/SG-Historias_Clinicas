@extends('theme.frontoffice.layouts.main')
@section('title','Mis recetas ')
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
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Especialista</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><a href="#modal" data-prescription="1" class="modal-trigger">ver</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="modal">
            <div class="modal-content">
                <h4>Titurlo</h4>
                <p>Hello world</p>
            </div>
            <div class="modal-footer">
                <a href="" class="modal-close waves-effect btn-flat">Cerrar</a>
                <a href="" class="modal-close waves-effect btn-flat">Imprimir</a>
            </div>
        </div>
    </div>
@endsection
@section('foot')
    <script>
        $('.modal').modal();
    </script>
@endsection
