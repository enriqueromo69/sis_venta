<invoice>
    <div class="well well-sm">
        <div class="row">
            <div class="col-xs-6">
                <input id="client" class="form-control typeahead" type="text" placeholder="Cliente" />
            </div>
            <div class="col-xs-2">
                <input class="form-control" type="text" placeholder="documento" readonly value="{documento}" />
            </div>
            <div class="col-xs-4">
                <input class="form-control" type="text" placeholder="Dirección" readonly value="{correo}" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-7">
            <input id="product" class="form-control" type="text" placeholder="Nombre del producto" />
        </div>
        <div class="col-xs-2">
            <input id="cantidad" class="form-control" type="text" placeholder="Cantidad" />
        </div>
        <div class="col-xs-2">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">S/.</span>
                <input class="form-control" type="text" placeholder="precio" value="{precio}" readonly />
            </div>
        </div>
        <div class="col-xs-1">
            <button onclick={__addProductToDetail} class="btn btn-primary form-control" id="btn-agregar">
                <i class="glyphicon glyphicon-plus"></i>
            </button>
        </div>
    </div>

    <hr />

    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width:40px;"></th>
            <th>Producto</th>
            <th style="width:100px;">Cantidad</th>
            <th style="width:100px;">P.U</th>
            <th style="width:100px;">tot_tot</th>
        </tr>
        </thead>
        <tbody>
        <tr each={detail}>
            <td>
                <button onclick={__removeProductFromDetail} class="btn btn-danger btn-xs btn-block">X</button>
            </td>
            <td>{nombre}</td>
            <td class="text-right">{cantidad}</td>
            <td class="text-right">$ {prec_unit}</td>
            <td class="text-right">$ {tot_tot}</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4" class="text-right"><b>igv_tot</b></td>
            <td class="text-right">$ {igv_tot.toFixed(2)}</td>
        </tr>
        <tr>
            <td colspan="4" class="text-right"><b>Sub tot_tot</b></td>
            <td class="text-right">$ {sub_tot.toFixed(2)}</td>
        </tr>
        <tr>
            <td colspan="4" class="text-right"><b>tot_tot</b></td>
            <td class="text-right">$ {tot_tot.toFixed(2)}</td>
        </tr>
        </tfoot>
    </table>

    <button if={detail.length > 0 && idcliente > 0} onclick={__save} class="btn btn-default btn-lg btn-block">
        Guardar
    </button>

    <script>
        var self = this;

        // Detalle del comprobante
        
        self.idcliente = 0;
        self.detail = [];
        self.igv_tot = 0;
        self.sub_tot = 0;
        self.tot_tot = 0;

        self.on('mount', function(){
            __clientAutocomplete();
            __productAutocomplete();
        })

        __removeProductFromDetail(e) {
            var item = e.item,
                index = this.detail.indexOf(item);

            this.detail.splice(index, 1);
            __calculate();
        }

        __addProductToDetail() {
            self.detail.push({
                idproducto: self.idproducto,
                nombre: self.product.value,
                cantidad: parseFloat(self.cantidad.value),
                prec_unit: parseFloat(self.precio),
                tot_tot: parseFloat(self.precio * self.cantidad.value)
            });

            self.idproducto = 0;
            self.product.value = '';
            self.cantidad.value = '';
            self.prec_unit = '';

            __calculate();
        }

        __save() {
            $.post(baseUrl('invoice/save'), {
                idcliente: self.idcliente,
                igv_tot: self.igv_tot,
                sub_tot: self.sub_tot,
                tot_tot: self.tot_tot,
                detail: self.detail
            }, function(r){
                if(r.response) {
                    window.location.href = baseUrl('invoice');
                } else {
                    alert('Ocurrio un error'+r.response);
                }
            }, 'json')
        }

        function __calculate() {
            var tot_tot = 0;

            self.detail.forEach(function(e){
                tot_tot += e.tot_tot;
            });

            self.tot_tot = tot_tot;
            self.sub_tot = parseFloat(tot_tot / 1.18);
            self.igv_tot = parseFloat(tot_tot - self.sub_tot);
        }

        function __clientAutocomplete(){
            var client = $("#client"),
                options = {
                url: function(q) {
                    return baseUrl('invoice/findClient?q=' + q);
                },
                getValue: 'razon_social',
                list: {
                    onClickEvent: function() {
                        var e = client.getSelectedItemData();
                        self.idcliente = e.idcliente;
                        self.documento = e.documento;
                        self.correo = e.correo;

                        self.update();
                    }
                }
            };

            client.easyAutocomplete(options);
        }

        function __productAutocomplete(){
            var product = $("#product"),
                options = {
                url: function(q) {
                    return baseUrl('invoice/findProduct?q=' + q);
                },
                getValue: 'nombre',
                list: {
                    onClickEvent: function() {
                        var e = product.getSelectedItemData();
                        self.idproducto = e.idproducto;
                        self.precio = e.precio;

                        self.update();
                    }
                }
            };

            product.easyAutocomplete(options);
        }
    </script>
</invoice>