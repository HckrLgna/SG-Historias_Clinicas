@extends('theme.backoffice.layouts.admin')
@section('title',$speciality->name)
@section('head')
@endsection
@section('breadcrumbs')
    <li><a href="{{route('backoffice.speciality.index')}}">Especialidades medicas</a></li>
    <li class="active">{{$speciality->name}} </li>
@endsection
@section('dropdown_settings')
    <li><a href="{{route('backoffice.speciality.edit',$speciality)}}" class="grey-text text-darken-2">Editar especialidades</a></li>
@endsection
@section('content')
    <div class="section">
        <strong>Especialidad:</strong> <p>{{$speciality->name}}</p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">

                        <div class="card-content">
                            <table class="responsive-table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>
                                                <a href="{{route('backoffice.user.show',$user)}}" target="_blank">
                                                    {{$user->name}}
                                                </a>
                                            </td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                        @empty
                                            <tr colspan="3"> No hay medicos registrados</tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>

                        <div class="card-action">
                            <a href="{{route('backoffice.role.edit',$speciality)}}">Editar</a>
                            <a href="#" onclick="enviar_formulario()" >Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <form method="post" action="{{route('backoffice.speciality.destroy',$speciality)}}" name="delete_form" >
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
@endsection
@section('foot')
    <script>
        function enviar_formulario(){
            Swal.fire({
                title: "¿Desea eliminar esta Especialidad?",
                text: "Esta accion no puede deshacerse",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, continuar",
                cancelButtonText: "No, cancelar",
            }).then((result)=>{
                if(result.isConfirmed){
                    document.delete_form.submit();
                    Swal.fire(
                        'Eliminado!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            });
        }
    </script>
@endsection
