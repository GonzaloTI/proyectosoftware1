@extends('layouts.app')
@section('title','Lista de Vistas')
@section('content')


<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="{{ route('reporte.generateDocumento')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
  </div>

 


<!-- ########################################################################################## -->


<!--  AQUI INICIA LAS OPCIONES ######################################################################################### -->

<!-- Illustrations -->
 
<div class="text-center">
    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 90rem;"
        src="   {{asset('welcome.jpeg')}}" alt="...">
</div>



  <!-- #############################################################3######-->


  



@endsection