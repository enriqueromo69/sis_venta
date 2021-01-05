<?php

namespace App\Http\Controllers;

use App\Repositories\ProductoRepository,
App\Repositories\ClienteRepository,
App\Repositories\InvoiceRepository;

use App\Models\Cliente;
use App\Models\Producto;

use Illuminate\Http\Request,
    App\Http\Requests,
    PDF;

class InvoiceController extends Controller
{
    private $_clientRepo;
    private $_productRepo;
    private $_invoiceRepo;

    public function __CONSTRUCT(
        ClienteRepository $clientRepo,
        ProductoRepository $productRepo,
        InvoiceRepository $invoiceRepo
    )
    {
        $this->_clientRepo = $clientRepo;
        $this->_productRepo = $productRepo;
        $this->_invoiceRepo = $invoiceRepo;
    }

    public function index()
    {
        return view(
            'invoice.index', [
                'model' => $this->_invoiceRepo->getAll()
            ]
        );
    }

    public function detail($id)
    {
        return view('invoice.detail', [
            'model' => $this->_invoiceRepo->get($id)
        ]);
    }

    public function pdf($id)
    {
        $model = $this->_invoiceRepo->get($id);
        $invoice_name = sprintf('comprobante-%s.pdf', str_pad ($model->id, 7, '0', STR_PAD_LEFT));

        $pdf = PDF::loadView('invoice.pdf', [
            'model' => $model
        ]);

        return $pdf->download($invoice_name);
    }

    public function add()
    {
        return view('invoice.add');
    }

    public function save(Request $req)
    {
        $data = (object)[
            'igv_tot' => $req->input('igv_tot'),
            'sub_tot' => $req->input('sub_tot'),
            'tot_tot' => $req->input('tot_tot'),
            'idcliente' => $req->input('idcliente'),
            //'observacion' => $req->input('observacion'),
            'detail' => []
        ];

        foreach($req->input('detail') as $d){
            $data->detail[] = (object)[
                'idproducto' => $d['idproducto'],
                'cantidad'   => $d['cantidad'],
                'prec_unit'  => $d['prec_unit'],
                'tot_tot'    => $d['tot_tot']
            ];
        }

        return $this->_invoiceRepo->save($data);
        //return $this->_invoiceRepo->save($req->input('igv_tot'));
    }

    public function findClient(Request $req)
    {
        return $this->_clientRepo->findByName($req->input('q'));
       
    }

    public function findProduct(Request $req)
    {
        return $this->_productRepo->findByName($req->input('q'));
    }
}
