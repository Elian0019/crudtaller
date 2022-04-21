<div class="container py-4">
    <h2 class="mb-3 text-center" > editar producto</h2>
<form action="{{asset('producto/update')}}/{{$datos['id']}}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="">nombre</label>
        <input type="text"  class="form-control" name="nombre" value="{{$datos['nombre']}}" placeholder="escriba su nombre" required >
    </div>
    <div class="mb-3">
        <label for="">descripcion</label>
        <input type="text" class="form-control" name="descripcion" value="{{$datos['descripcion']}}" placeholder="escriba su nombre" required >
    </div>
    <div class="mb-3">
        <label for="">precio</label>
        <input type="number" class="form-control" name="precio" value="{{$datos['precio']}}" placeholder="escriba su nombre" required >
    </div>

    <div class="mb-3">
        <a class="btn btn-primary " href="{{route('producto')}}"> 
         regresar
        </a>
    <button class="btn btn-success" type="submit">actualizar</button>
    </div>
</form>
</div> 