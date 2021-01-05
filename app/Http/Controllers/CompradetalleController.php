<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompradetalleRequest;
use App\Http\Requests\UpdateCompradetalleRequest;
use App\Repositories\CompradetalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CompradetalleController extends AppBaseController
{
    /** @var  CompradetalleRepository */
    private $compradetalleRepository;

    public function __construct(CompradetalleRepository $compradetalleRepo)
    {
        $this->compradetalleRepository = $compradetalleRepo;
    }

    /**
     * Display a listing of the Compradetalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $compradetalles = $this->compradetalleRepository->all();

        return view('compradetalles.index')
            ->with('compradetalles', $compradetalles);
    }

    /**
     * Show the form for creating a new Compradetalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('compradetalles.create');
    }

    /**
     * Store a newly created Compradetalle in storage.
     *
     * @param CreateCompradetalleRequest $request
     *
     * @return Response
     */
    public function store(CreateCompradetalleRequest $request)
    {
        $input = $request->all();

        $compradetalle = $this->compradetalleRepository->create($input);

        Flash::success('Compradetalle saved successfully.');

        return redirect(route('compradetalles.index'));
    }

    /**
     * Display the specified Compradetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $compradetalle = $this->compradetalleRepository->find($id);

        if (empty($compradetalle)) {
            Flash::error('Compradetalle not found');

            return redirect(route('compradetalles.index'));
        }

        return view('compradetalles.show')->with('compradetalle', $compradetalle);
    }

    /**
     * Show the form for editing the specified Compradetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $compradetalle = $this->compradetalleRepository->find($id);

        if (empty($compradetalle)) {
            Flash::error('Compradetalle not found');

            return redirect(route('compradetalles.index'));
        }

        return view('compradetalles.edit')->with('compradetalle', $compradetalle);
    }

    /**
     * Update the specified Compradetalle in storage.
     *
     * @param int $id
     * @param UpdateCompradetalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompradetalleRequest $request)
    {
        $compradetalle = $this->compradetalleRepository->find($id);

        if (empty($compradetalle)) {
            Flash::error('Compradetalle not found');

            return redirect(route('compradetalles.index'));
        }

        $compradetalle = $this->compradetalleRepository->update($request->all(), $id);

        Flash::success('Compradetalle updated successfully.');

        return redirect(route('compradetalles.index'));
    }

    /**
     * Remove the specified Compradetalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $compradetalle = $this->compradetalleRepository->find($id);

        if (empty($compradetalle)) {
            Flash::error('Compradetalle not found');

            return redirect(route('compradetalles.index'));
        }

        $this->compradetalleRepository->delete($id);

        Flash::success('Compradetalle deleted successfully.');

        return redirect(route('compradetalles.index'));
    }
}
