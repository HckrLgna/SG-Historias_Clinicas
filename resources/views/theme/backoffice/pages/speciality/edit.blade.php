@extends('theme.backoffice.layouts.admin')
@section('title','Editar especialidad')
@section('head')
@endsection
@section('breadcrumbs')
    <li><a href="{{route('backoffice.speciality.index')}}"  >Especialidades medicas</a></li>
    <li class="">{{$speciality->name}}</li>
    <li class="active">Editar especialidad</li>
@endsection
@section('content')
    <div class="section">
        <p class="caption">Introduce los datos para editar <strong>{{$speciality->name}}</strong>  </p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <form class="col s12 m8 offset-m2" method="post" action="{{route('backoffice.speciality.update',$speciality)}}">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" type="text" name="name" value="{{$speciality->name}}">
                            <label for="name">Nombre de la especialidad</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
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
