@extends('theme.backoffice.layouts.admin')
@section('title','pagina demo')
@section('head')
@endsection
@section('content')
    <div class="section">
        <strong>Rol:</strong> <p>{{$role->name}}</p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card-panel">
                        <h4 class="header2">Usuarios con el rol {{$role->name}}</h4>
                        <div class="row">
                            <div class="col">
                                <p><b>Slug: </b>{{$role->slug}}</p>
                                <p><b>Descripcion: </b> {{$role->description}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('foot')
@endsection
