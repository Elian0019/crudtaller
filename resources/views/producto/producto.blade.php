
<div class="container py-4">
    <h2 class="mb-3 text-center" >producto</h2>
<div class="mb-3">
    <a class="btn btn-primary " href="{{route('producto.create')}}"> 
      agregar producto
    </a>
</div>
<div class="card">
    <div class="table-responsive">
        <div class="card-body">
            <table id="producto_table" class=" table-responsive table table-bordered table-light"  >
                <thead>
                   <th>nombre</th>
                   <th>descripcion</th>
                   <th>precio</th>
                   <th width="1%">editar</th>
                   <th width="1%">eliminar</th>
                </thead>
                <tbody> 
                    @foreach ($datos as $dato)
                    <tr>
                        <td>{{$dato['nombre']}}</td>
                        <td>{{$dato['descripcion']}}</td>
                        <td>{{$dato['precio']}}</td>
                        <td>
                            <a class="btn btn-success" href="{{asset('producto/edit')}}/{{$dato['id']}}"><i class="bi bi-pencil"></i></a>
                        </td>
                        <td>
                            <a class="btn btn-warning" onclick="eliminarProducto({{$dato['id']}})" ><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>    


<script>
function eliminarProducto( $id){
  var url = '{{asset('')}}producto/destroy/'+$id;
  Swal.fire({
  title: 'desea eliminar',
  text: "administardor",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
    window.location.href = url;
  }
})

}


</script>