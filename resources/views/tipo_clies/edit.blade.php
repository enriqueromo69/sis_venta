@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Clie
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoClie, ['route' => ['tipoClies.update', $tipoClie->idtipodoc], 'method' => 'patch']) !!}

                        @include('tipo_clies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection