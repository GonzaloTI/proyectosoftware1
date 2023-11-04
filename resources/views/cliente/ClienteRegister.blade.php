@extends('layouts.app')
@section('title','Lista de Vistas')
@section('content')



<!
<!-- ########################################################################################## -->



<div class="container-fluid">
    
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="{{ route('reporte.generateCliente')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->


<!-- ########################################################################################## -->

   
<!--  AQUI INICIA LAS OPCIONES ANTERIORESSS        ######################################################################################### -->
         

          <!-- #############################################################3######-->

          <a href="{{route('admin.crearclientes')}}" class="mx-2 font-semibold border-2 border-white py-2 px-8 pt-1 h-10 rounded-md hover:bg-white hover:text-blue-700">Crear</a>

  <h1 class="text-3xl text-center font-bold">Lista de Clientes completo</h1>


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
                            <th>A_paterno</th>
                            <th>A_materno</th>
                            <th>Sexo</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Estado</th>
                            <th>F_Registro</th>
                            <th>Actions</th>
                        </tr>
                    </thead>



                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Carnet</th>
                            <th>Nombre</th>
                            <th>A_paterno</th>
                            <th>A_materno</th>
                            <th>Sexo</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Estado</th>
                            <th>F_Registro</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>

        <!--############################################33#######-->

        @foreach($user as $row)
  
        <tr>
                <td class="py-3 px-7">{{$row->id}}</td>
                <td class="p-3">{{$row->ci}}</td>
                <td class="p-3 text-center">{{$row->nombre}}</td>
                <td class="p-3 text-center">{{$row->a_paterno}}</td>
                <td class="p-3 text-center">{{$row->a_materno}}</td>
                <td class="p-3 text-center">{{$row->sexo}}</td>
                <td class="p-3 text-center">{{$row->telefono}}</td>
                <td class="p-3 text-center">{{$row->direccion}}</td>
                <td class="p-3 text-center">{{$row->estado}}</td>
                <td class="p-3 text-center">{{$row->created_at}}</td>
         
                <td class="p-3">
                    
                    <a href="{{ route('admin.destroyclientes', $row->id )}}" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Borrar</span>
                    </a>
                  
                    
                    <a href="{{ route('admin.editclientes', $row->id )}}"  class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Editar</span>
                    </a>




                  </td>
              </tr>
    
      @endforeach

          <!--################################3#######-->              
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->






<!-- AQUI TERMINA LAS OPCIONES ANTEIROESSSSSSSSSSSS########################################################################################## -->
@endsection