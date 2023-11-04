@extends('layouts.app')
@section('title','Cliente register')
@section('content')


<div class="container-fluid">
    
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->


<!-- ########################################################################################## -->

   
<!--  AQUI INICIA LAS OPCIONES ANTERIORESSS        ######################################################################################### -->
         

          <!-- #############################################################3######-->

          <a href="{{route('admin.crearcliente')}}" class="mx-2 font-semibold border-2 border-white py-2 px-8 pt-1 h-10 rounded-md hover:bg-white hover:text-blue-700">Crear</a>

  <h1 class="text-3xl text-center font-bold">Lista de Clientes</h1>


  <!-- #############################################################3######--> 

  <div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Carnet</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Create</th>
                            <th>Update</th>
                            <th>Actions</th>
                        </tr>
                    </thead>



                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Carnet</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Create</th>
                            <th>Update</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>

        <!--############################################33#######-->

        @foreach($user as $row)
  
        @if($row->role == 'cliente')
        <tr>
                <td class="py-3 px-6">{{$row->id}}</td>
                <td class="p-3">{{$row->carnet}}</td>
                <td class="p-3 text-center">{{$row->name}}</td>
                <td class="p-3 text-center">{{$row->email}}</td>
                <td class="p-3 text-center">{{$row->created_at}}</td>
                <td class="p-3 text-center">{{$row->updated_at}}</td>
                <td class="p-3">
                    
                    <a href="{{ route('admin.destroycliente', $row->id )}}" class="text-black font-semibold border-2 border-red-500 py-3 px-8 pt-1 h-10 rounded-md hover:bg-red-500 hover:text-white">Borrar</a>
                    <a href="{{ route('admin.editcliente', $row->id )}}" class="text-black font-semibold border-2 border-blue-500 py-3 px-8 pt-1 h-10 rounded-md hover:bg-blue-500 hover:text-white">Editar</a>
  
               
                  </td>
              </tr>
        @endif
      @endforeach

          <!--################################3#######-->              
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- AQUI TERMINA LAS OPCIONES ANTEIROESSSSSSSSSSSS########################################################################################## -->
@endsection