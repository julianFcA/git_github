<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Actualiza Datos de cliente</title>
</head>
<body>
<br>
<a href= "{{ url ('cliente')}}"    class="btn btn-secondary btn-sm"> Volver </a>
<br>
<br>
<div>
    <form action="/logout"  method="POST">
        @csrf 
        <a href="{{url('') }}" class="btn btn-secondary dropdown" onclick="this.closest('form').submit()">Cerrar Sesion</a>
    </form>
</div>
<br>
    ACTUALIZAR DATOS DE EMPLEADO
    <br>
    @if ($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- $cliente->id -->

    <br>
    <form action="{{url('/cliente/'.$cliente->id) }}" method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf

        <div class="mb-3 row">
            <label for="primer_nombre" class="col-sm-2 col-form-label">PRIMER NOMBRE </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" value="{{ $cliente-> primer_nombre }}" placeholder="Ingrese Nombres" required> 
            </div>
        </div>

        <div class="mb-3 row">
            <label for="segundo_nombre" class="col-sm-2 col-form-label">SEGUNDO NOMBRE</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre" value="{{ $cliente-> segundo_nombre }}" placeholder="Ingrese Nombres" required> 
            </div>
        </div>

        <div class="mb-3 row">
            <label for="primer_apellido" class="col-sm-2 col-form-label">PRIMER APELLIDO </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" value="{{ $cliente-> primer_apellido }}"  placeholder="Ingrese Primer Apellido" required> 
            </div>
        </div>

        <div class="mb-3 row">
            <label for="segundo_apellido" class="col-sm-2 col-form-label">SEGUNDO APELLIDO </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" value="{{ $cliente-> segundo_apellido }}"  placeholder="Ingrese Segundo Apellido" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="edad" class="col-sm-2 col-form-label">EDAD </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="edad" id="edad" value="{{ $cliente-> edad }}"  placeholder="Ingrese edad" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="direccion" class="col-sm-2 col-form-label">DIRECCIÒN </label>
            <div class="col-sm-5">
                <input type="varchar" class="form-control" name="direccion" id="direccion" value="{{ $cliente-> direccion}}"  placeholder="Ingrese direccion" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="correo" class="col-sm-2 col-form-label">CORREO </label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="correo" id="correo" value="{{ $cliente-> correo}}"  placeholder="Ingrese correo" required>
            </div>
        </div>


        <div class="mb-3 row">
            <label for="firma" class="col-sm-2 col-form-label">FIRMA</label>
          
            <div class="col-sm-5">
                <img class="img-thumbnail img-fluid" src="{{asset('storage') .'/'. $cliente->firma}}" width="150" alt="" srcset="">

                <input type="file" class="form-control" name="firma" id="firma" value=""  placeholder="suba firma"  required>
            </div>
        </div>

        <input class="btn btn-primary btn sm"  type="submit" value="Actualizar"> 

    </form> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>