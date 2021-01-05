<?php

namespace App\Repositories;

use App\Models\Venta;
use App\Models\Ventadetalle;
use DB;

class InvoiceRepository {
    private $model;
    
    public function __construct(){
        $this->model = new Venta();
    }

    public function get($id) {
        return $this->model->find($id);
    }

    public function getAll() {
        return $this->model->orderBy('idventa', 'desc')->get();
    }

    public function save($data) {

        $return = (object)[
            'response' => false
        ];

        try {
            //DB::beginTransaction();

            $this->model->igv_tot = $data->igv_tot;
            $this->model->sub_tot = $data->sub_tot;
            $this->model->tot_tot = $data->tot_tot;
            $this->model->idcliente = $data->idcliente;

            $this->model->save();

            $detail = [];
            foreach($data->detail as $d) {
                $obj = new Ventadetalle();
                $obj->idventa = $this->model->idventa;
                $obj->idproducto = $d->idproducto;
                $obj->cantidad = $d->cantidad;
                $obj->prec_unit = $d->prec_unit;
                $obj->tot_tot = $d->tot_tot;
                //$obj->save();//se puede usar esta actualizacion
               $detail[] = $obj;
            }

            $this->model->details()->saveMany($detail);
            $return->response = true;

            //DB::commit();
        } catch (\Exception $e){
            //DB::rollBack();
        }

        return json_encode($return);
        

        //return $data->igv_tot;
    }
}
