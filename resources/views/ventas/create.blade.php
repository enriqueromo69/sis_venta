@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
    <section class="content-header">
        <h1>
            Venta
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">

                @include('ventas.fields')


                </div>
            </div>
        </div>
    </div>
@endsection
