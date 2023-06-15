<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Actualiza Datos de celular</title>
</head>
<body>
<br>
<a href= "{{ url ('celular')}}"    class="btn btn-secondary btn-sm"> Volver </a>
<br>
<br>
<div>
    <form action="/logout" method="POST">
        @csrf 
        <a href="{{url('') }}" class="btn btn-secondary dropdown" onclick="this.closest('form').submit()">Cerrar Sesion</a>
    </form>
</div>
<br>
    ACTUALIZAR DATOS DE CELULAR
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
    <form action="{{url('/celular/'.$celular->id) }}" method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf

        <div class="mb-3 row">
            <label for="marca" class="col-sm-2 col-form-label">MARCA </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="marca" id="marca" value="{{ $celular-> marca }}" placeholder="Ingrese Marca" required> 
            </div>
        </div>

        <div class="mb-3 row">
            <label for="precio" class="col-sm-2 col-form-label">PRECIO</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="precio" id="precio" value="{{ $celular-> precio }}" placeholder="Ingrese Precio" required> 
            </div>
        </div>


        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">FOTO</label>
            <!-- {{ $celular-> foto }} -->
            <div class="col-sm-5">

                <img class="img-thumbnail img-fluid" src="{{asset('storage') .'/'. $celular->foto}}" width="150" alt="" srcset="">

                <input type="file" class="form-control" name="foto" id="foto" value=""  placeholder="suba foto"  required>
            </div>
        </div>

        <input class="btn btn-primary btn sm"  type="submit" value="Actualizar"> 

    </form> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>