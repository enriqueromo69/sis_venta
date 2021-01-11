<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVentaRequest;
use App\Http\Requests\UpdateVentaRequest;
use App\Repositories\VentaRepository;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Comprobante;
use Flash;
use Response;

use App\Models\Venta;
use App\Models\Ventadetalle;

class VentaController extends AppBaseController
{
    /** @var  VentaRepository */
    private $ventaRepository;


    //private $_invoiceRepo;
    public function __construct(VentaRepository $ventaRepo)
    {
        $this->ventaRepository = $ventaRepo;

    }
    
/*

    private $clienteRepository;
    private $productoRepository;
    public function __construct(VentaRepository $ventaRepo,
    ClienteRepository $clienteRepo,
    ProductoRepository $productoRepo)
    {
        $this->ventaRepository = $ventaRepo;
        $this->clienteRepository = $clienteRepo;
        $this->productoRepository = $productoRepo;
    }

    public function findClient(Request $req)
    {
        return $this->clienteRepository
                    ->findByName($req->input('q'));
    }

    public function findProduct(Request $req)
    {
        return $this->productoRepository
                    ->findByName($req->input('q'));
    }
    */
    /**
     * Display a listing of the Venta.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ventas = $this->ventaRepository->all();

        return view('ventas.index')
            ->with('ventas', $ventas);
    }

    /**
     * Show the form for creating a new Venta.
     *
     * @return Response
     */
    public function create()
    {
        $comprobante=Comprobante::orderBy('idcomprobante','ASC')->pluck('descrip_cmp','idcomprobante');

        return view('ventas.create',compact('comprobante'));
    }

    /**
     * Store a newly created Venta in storage.
     *
     * @param CreateVentaRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    //public function store(CreateVentaRequest $request)
    {
        /* 
        $input = $request->all();
        $venta = $this->ventaRepository->create($input);
        Flash::success('Venta saved successfully.');
        return redirect(route('ventas.index'));
        /**/
        /*
        $data = (object)$request->all();

        $venta = $this->ventaRepository->save($data);
        Flash::success('Venta saved successfully.');
        return redirect(route('ventas.index'));
        //return $this->ventaRepository->save($data);
        /**/

        /* */
        $venta= new Venta();
        //$venta->idcomprobante=$request->input("idcomprobante");
        $venta->idcomprobante=$request->idcomprobante;
        $venta->numero=$request->numero;
        $venta->idcliente=$request->idcliente;
        $venta->sub_tot=$request->sub_tot;
        $venta->igv_tot=$request->igv_tot;
        $venta->tot_tot=$request->tot_tot;
        $venta->observacion=$request->observacion;
        $venta->save();

        foreach($request->detail as $deta){
            $ventadetalle=new Ventadetalle();
            $ventadetalle->idventa=$venta->idventa;
            $ventadetalle->idproducto=$deta['idproducto'];
            $ventadetalle->cantidad=$deta['cantidad'];
            $ventadetalle->prec_unit=$deta['prec_unit'];
            $ventadetalle->tot_tot=31.2;
            $ventadetalle->observacion="na";
            $ventadetalle->save();
        }

        return "se creo satisfactoriamente la venta # : ".$venta->idventa;
        /**/

        //dd(json_encode($request->input("detail")));
        
        //dd(json_encode($request->detail));

    }




    /**
     * Display the specified Venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        return view('ventas.show')->with('venta', $venta);
    }

    /**
     * Show the form for editing the specified Venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comprobante=Comprobante::orderBy('idcomprobante','ASC')->pluck('descrip_cmp','idcomprobante');

        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

       // return view('ventas.edit')->with('venta', $venta);
       return view('ventas.edit',compact('venta','comprobante'));
    }

    /**
     * Update the specified Venta in storage.
     *
     * @param int $id
     * @param UpdateVentaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVentaRequest $request)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        $venta = $this->ventaRepository->update($request->all(), $id);

        Flash::success('Venta updated successfully.');

        return redirect(route('ventas.index'));
    }

    /**
     * Remove the specified Venta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        $this->ventaRepository->delete($id);

        Flash::success('Venta deleted successfully.');

        return redirect(route('ventas.index'));
    }
}
