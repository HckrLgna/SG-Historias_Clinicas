@extends('theme.backoffice.layouts.admin')
@section('title',$user->name)
@section('head')
@endsection
@section('breadcrumbs')
    <li><a href="{{route('backoffice.user.index')}}">Usuarios del sistema</a></li>
    <li>{{$user->name}}</li>
@endsection

@section('dropdown_settings')
    <li><a href="{{route('backoffice.user.edit',$user)}}" class="grey-text text-darken-2">Editar usuarios</a></li>
@endsection

@section('content')
    <div class="section">
        <strong>Usuario:</strong> <p>{{$user->name}}</p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12 m8 ">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{$user->name}}</span>
                            <p><strong>Edad :</strong> {{$user->age()}}</p>
                            <ul>
                                @foreach($user->roles as $role)
                                    <li>{{$role->name}}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="card-action">
                            <a href="{{route('backoffice.user.edit',$user)}}">Editar</a>
                            <a href="#" onclick="enviar_formulario()" >Eliminar</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 ">
                    @include('theme.backoffice.pages.user.includes.user_nav')
                </div>
            </div>

        </div>
    </div>
    <form method="post" action="{{route('backoffice.user.destroy',$user)}}" name="delete_form" >
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
@endsection
@section('foot')
    <script>
        function enviar_formulario(){
            Swal.fire({
                title: "¿Desea eliminar este Usuario?",
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
