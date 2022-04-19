@extends('theme.backoffice.layouts.admin')
@section('title','pagina demo')
@section('head')
@endsection
@section('breadcrumbs')
    <li><a href="{{route('backoffice.role.index')}}">Roles del sistema</a></li>
    <li>{{$role->name}}</li>
@endsection
@section('content')
    <div class="section">
        <strong>Rol:</strong> <p>{{$role->name}}</p>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class="header2">Usuarios con el rol {{$role->name}}</span>
                            <p><b>Slug: </b>{{$role->slug}}</p>
                            <p><b>Descripcion: </b> {{$role->description}}</p>
                        </div>

                        <div class="card-action">
                                <a href="{{route('backoffice.role.edit',$role)}}">Editar</a>
                                <a href="#" onclick="enviar_formulario()" >Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="{{route('backoffice.role.destroy',$role)}}" name="delete_form" >
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
@endsection
@section('foot')
    <script>
        function enviar_formulario(){
            Swal.fire({
                title: "¿Desea eliminar este rol?",
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
