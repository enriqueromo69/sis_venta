<style>
  .cabeza-tabla{
    background: gray;
    color: white;
    
  }
</style>

<div class="panel panel-primary">
    <div class="panel-heading">Panel heading without title</div>
    <div class="panel-body">
    <!-- Idcomprobante Field -->
    <div class="form-group col-sm-2">
    {!! Form::label('idcomprobante', 'Idcomprobante:') !!}
    {!! Form::select('idcomprobante', $comprobante,null, ['class' => 'form-control']) !!}
    </div>

    <!-- Numero Field -->
    <div class="form-group col-sm-2">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
    </div>

    <!-- Idcliente Field -->
    <div class="form-group col-sm-2">
    {!! Form::label('idcliente', 'Idcliente:') !!}
    {!! Form::number('idcliente', null, ['class' => 'form-control']) !!}
    </div>


    </div>
  </div>
  
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Contenido</h3>
    </div>
    <div class="panel-body">
      <!-- inicio de los textos -->
      <input type="text" id="idprod">
      <input type="text" id="nom_prod">
      <input type="text" id="cant">
      <!-- finaliza los textos -->
      <button onclick="agregar()">Agrega</button>
    <table id="tabla1" class="table " >
    <thead class="cabeza-tabla">
    <tr>
    <td>id</td>
    <td>Producto</td>
    <td>cantidad</td>
    </tr>
    </thead>
    <tbody id="tbody1">

    </tbody>

    </table>
    
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading">
      <h3 class="panel-title">tot_totes</h3>
    </div>
    <div class="panel-body">
                <!-- Sub Tot Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('sub_tot', 'Sub Tot:') !!}
            {!! Form::number('sub_tot', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Igv Tot Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('igv_tot', 'Igv Tot:') !!}
            {!! Form::number('igv_tot', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Tot Tot Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('tot_tot', 'Tot Tot:') !!}
            {!! Form::number('tot_tot', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Observacion Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('observacion', 'Observacion:') !!}
            {!! Form::text('observacion', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-12">
          <button onclick="guardar()">Guardar</button>
        </div>
        
    </div>




    </div>
<script>
  var detalle =Array();
  function agregar(){
   var id = $("#idprod").val();
   var nombre_pro = $("#nom_prod").val();
   var cantidad=$("#cant").val();
   var producto=Object();//creamos el objeto
   producto.idproducto=id;
   producto.nombre=nombre_pro;
   producto.cantidad=cantidad;

   detalle.push(producto);
   console.log(producto);
   var fila='<tr ><td>'+id+'</td><td>'+nombre_pro+'</td><td>'+cantidad+'<td></tr>';
		$('#tbody1').append(fila);
   //console.log(a);
  }

function guardar(){
  $.post(baseUrl('ventas/store'), {
                idcomprobante: $("#idcomprobante").val(),
                idcliente: $("#idcliente").val(),
                igv_tot:  $("#igv_tot").val(),
                sub_tot:  $("#sub_tot").val(),
                tot_tot:  $("#tot_tot").val(),
                detail: detalle
            }, function(r){
                if(r.response) {
                    window.location.href = baseUrl('ventas');
                } else {
                    alert('Ocurrio un error'+r.response);
                }
            }, 'json');
}

</script>


  


