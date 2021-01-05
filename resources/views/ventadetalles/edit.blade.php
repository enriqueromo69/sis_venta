@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Venta Detalle
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ventadetalle, ['route' => ['ventadetalles.update', $ventadetalle->idventadeta], 'method' => 'patch']) !!}
                        @include('ventadetalles.fields')
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection