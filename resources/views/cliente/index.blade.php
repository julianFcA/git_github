<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>inicio</title>
</head>
<body>
    <main>
        <div class="container py-4">
        <div class="d-flex">
            <div class="btn-group">
                <li>
                    <a href="{{route('empleado.index') }}" class="btn btn-secondary btn-sm">REGISTRO DE EMPLEADO</a>
                </li>
            </div>
            <div class="btn-group">
                <li>
                    <a href="{{route('cliente.index') }}" class="btn btn-secondary btn-sm">REGISTRO DE CLIENTE</a>
                </li>
            </div>
            <div class="btn-group">
                <li >
                    <a href="{{route('celular.index') }}" class="btn btn-secondary btn-sm">CELULAR</a>
                </li>
            </div>
            <div class="btn-group">
                <li>
                    <a href="{{route('referencia.index') }}" class="btn btn-secondary btn-sm">REFERENCIA</a>
                </li>
            </div>
            <div class="btn-group">
                <li>
                    <a href="{{route('compra.index') }}" class="btn btn-secondary btn-sm">COMPRA</a>
                </li>
            </div>
            <div class="btn-group">
                <form action="/logout"  method="POST">
                    @csrf 
                    <a href="{{url('') }}" class="btn btn-secondary btn-sm" onclick="this.closest('form').submit()">Cerrar Sesion</a>
                </form>
            </div>
        </div>
        <br>
        <br>
        PAGINA PRINCIPAL DE CLIENTES
        <br>
        <a href= "{{ url ('menu')}}"    class="btn btn-secondary btn-sm"> Menù </a>
        <br>
        <a href= "{{ url ('cliente/create')}}"    class="btn btn-secondary btn-sm"> Registrar Cliente </a>
        <br>
        <br>
                <table class= "table table-hover">
                        <thead>
                            <tr>
                                <th>Nùmero </th>
                                <th>Primer Nombre </th>
                                <th>Segundo Nombre </th>
                                <th>Primer apellido</th>
                                <th>Segundo apellido</th>
                                <th>Edad</th>
                                <th>Direcciòn</th>
                                <th>Correo</th>
                                <th>Firma</th>
                                <th> Eliminar </th>
                                <th> Actualizar </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente as $row){
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->primer_nombre}}</td>
                                    <td>{{$row->segundo_nombre}}</td>
                                    <td>{{$row->primer_apellido}}</td>
                                    <td>{{$row->segundo_apellido}}</td>
                                    <td>{{$row->edad}}</td>
                                    <td>{{$row->direccion}}</td>
                                    <td>{{$row->correo}}</td>
                                    <td>
                                        <img class="img-thumbnail img-fluid" src="{{asset('storage') .'/'. $row->firma}}" width="150" alt="" srcset=""></td>
                                    <td>
                                    <form action="{{url('/cliente/'.$row->id)}}"  method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input class="btn btn-primary btn sm" type="submit" value='Eliminar' onclick="return confirm('Desea Eliminar el Registro')">
                                        <br>
                                        </br>
                                    </form>
                                    </td>

                                    <td>
                                        <a href="{{url('/cliente/'.$row->id.'/edit')}}" class="btn btn-primary btn sm" >Actualizar  </a> 
                                    </br>
                                    </td>    
                                </tr>
                                
                            }
                            @endforeach
                        </tbody>
                </table>
                {!! $cliente->links() !!}
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

