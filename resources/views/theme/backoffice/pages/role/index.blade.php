@extends('theme.backoffice.layouts.admin')
@section('title','Roles del sistema')
@section('head')
@endsection
@section('content')
    <div class="section">
        <b>Roles del sistema</b>
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
                                    <th>Slug</th>
                                    <th>Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td><a href="{{route('backoffice.role.show',$role)}}">{{$role->name}}</a></td>
                                    <td>{{$role->slug}}</td>
                                    <td>{{$role->description}}</td>
                                    <td><a href="{{route('backoffice.role.edit',$role)}}">Editar</a></td>
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
