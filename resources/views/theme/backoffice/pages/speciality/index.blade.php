@extends('theme.backoffice.layouts.admin')
@section('title','Especialidades medicas')
@section('head')
@endsection
@section('breadcrumbs')
    <li><a href="{{route('backoffice.speciality.index')}}" class="active"> Especialidades medicas</a></li>
@endsection
@section('dropdown_settings')
    <li><a href="{{route('backoffice.speciality.create')}}">Crear especialidades</a></li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Especialidades medicas</strong></p>
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
                                    <th>Numero de medicos</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($specialities as $speciality)
                                    <tr>
                                        <td><a href="{{route('backoffice.speciality.show',$speciality)}}">{{$speciality->name}}</a></td>
                                        <td>{{$speciality->users->count()}}</td>
                                        <td><a href="{{route('backoffice.speciality.edit',$speciality)}}">Editar</a></td>
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
