<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVentadetalleRequest;
use App\Http\Requests\UpdateVentadetalleRequest;
use App\Repositories\VentadetalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VentadetalleController extends AppBaseController
{
    /** @var  VentadetalleRepository */
    private $ventadetalleRepository;

    public function __construct(VentadetalleRepository $ventadetalleRepo)
    {
        $this->ventadetalleRepository = $ventadetalleRepo;
    }

    /**
     * Display a listing of the Ventadetalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ventadetalles = $this->ventadetalleRepository->all();

        return view('ventadetalles.index')
            ->with('ventadetalles', $ventadetalles);
    }

    /**
     * Show the form for creating a new Ventadetalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('ventadetalles.create');
    }

    /**
     * Store a newly created Ventadetalle in storage.
     *
     * @param CreateVentadetalleRequest $request
     *
     * @return Response
     */
    public function store(CreateVentadetalleRequest $request)
    {
        $input = $request->all();

        $ventadetalle = $this->ventadetalleRepository->create($input);

        Flash::success('Ventadetalle saved successfully.');

        return redirect(route('ventadetalles.index'));
    }

    /**
     * Display the specified Ventadetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ventadetalle = $this->ventadetalleRepository->find($id);

        if (empty($ventadetalle)) {
            Flash::error('Ventadetalle not found');

            return redirect(route('ventadetalles.index'));
        }

        return view('ventadetalles.show')->with('ventadetalle', $ventadetalle);
    }

    /**
     * Show the form for editing the specified Ventadetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ventadetalle = $this->ventadetalleRepository->find($id);

        if (empty($ventadetalle)) {
            Flash::error('Ventadetalle not found');

            return redirect(route('ventadetalles.index'));
        }

        return view('ventadetalles.edit')->with('ventadetalle', $ventadetalle);
    }

    /**
     * Update the specified Ventadetalle in storage.
     *
     * @param int $id
     * @param UpdateVentadetalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVentadetalleRequest $request)
    {
        $ventadetalle = $this->ventadetalleRepository->find($id);

        if (empty($ventadetalle)) {
            Flash::error('Ventadetalle not found');

            return redirect(route('ventadetalles.index'));
        }

        $ventadetalle = $this->ventadetalleRepository->update($request->all(), $id);

        Flash::success('Ventadetalle updated successfully.');

        return redirect(route('ventadetalles.index'));
    }

    /**
     * Remove the specified Ventadetalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ventadetalle = $this->ventadetalleRepository->find($id);

        if (empty($ventadetalle)) {
            Flash::error('Ventadetalle not found');

            return redirect(route('ventadetalles.index'));
        }

        $this->ventadetalleRepository->delete($id);

        Flash::success('Ventadetalle deleted successfully.');

        return redirect(route('ventadetalles.index'));
    }
}
