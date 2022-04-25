@extends('theme.backoffice.layouts.admin')
@section('title','Usuarios del sistema')
@section('head')
@endsection
@section('breadcrumbs')
    <li><a href="{{route('backoffice.user.index')}}">Usuarios del sistema</a></li>
@endsection
@section('dropdown_settings')
    <li><a href="{{route('backoffice.user.create')}}">Crear usuarios</a></li>
@endsection

@section('content')
    <div class="section">
        <b>Usuarios del sistema</b>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <div class="card-panel">
                        <div class="row">
                            <table class="responsive-table">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Correo</th>
                                    <th colspan="2">Acciones</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td><a href="{{route('backoffice.user.show',$user)}}">{{$user->name}}</a></td>
                                        <td>{{$user->dob}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><a href="{{route('backoffice.role.edit',$user)}}">Editar</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('foot')
@endsection
