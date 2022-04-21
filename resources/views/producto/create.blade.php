
<div class="container py-4">
    <h2 class="mb-3 text-center" > crear producto</h2>
<form action="{{route('producto.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="">nombre</label>
        <input type="text"  class="form-control" name="nombre" value="" placeholder="escriba su nombre" required >
    </div>
    <div class="mb-3">
        <label for="">descripcion</label>
        <input type="text" class="form-control" name="descripcion" value="" placeholder="escriba su nombre" required >
    </div>
    <div class="mb-3">
        <label for="">precio</label>
        <input type="number" class="form-control" name="precio" value="" placeholder="escriba su nombre" required >
    </div>

    <div class="mb-3">
        <a class="btn btn-primary " href="{{route('producto')}}"> 
         regresar
        </a>
    <button class="btn btn-success" type="submit"> agregar</button>
    </div>
</form>
</div> 