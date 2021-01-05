<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipo_clieRequest;
use App\Http\Requests\UpdateTipo_clieRequest;
use App\Repositories\Tipo_clieRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Tipo_clieController extends AppBaseController
{
    /** @var  Tipo_clieRepository */
    private $tipoClieRepository;

    public function __construct(Tipo_clieRepository $tipoClieRepo)
    {
        $this->tipoClieRepository = $tipoClieRepo;
    }

    /**
     * Display a listing of the Tipo_clie.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoClies = $this->tipoClieRepository->all();

        return view('tipo_clies.index')
            ->with('tipoClies', $tipoClies);
    }

    /**
     * Show the form for creating a new Tipo_clie.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_clies.create');
    }

    /**
     * Store a newly created Tipo_clie in storage.
     *
     * @param CreateTipo_clieRequest $request
     *
     * @return Response
     */
    public function store(CreateTipo_clieRequest $request)
    {
        $input = $request->all();

        $tipoClie = $this->tipoClieRepository->create($input);

        Flash::success('Tipo Clie saved successfully.');

        return redirect(route('tipoClies.index'));
    }

    /**
     * Display the specified Tipo_clie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoClie = $this->tipoClieRepository->find($id);

        if (empty($tipoClie)) {
            Flash::error('Tipo Clie not found');

            return redirect(route('tipoClies.index'));
        }

        return view('tipo_clies.show')->with('tipoClie', $tipoClie);
    }

    /**
     * Show the form for editing the specified Tipo_clie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoClie = $this->tipoClieRepository->find($id);

        if (empty($tipoClie)) {
            Flash::error('Tipo Clie not found');

            return redirect(route('tipoClies.index'));
        }

        return view('tipo_clies.edit')->with('tipoClie', $tipoClie);
    }

    /**
     * Update the specified Tipo_clie in storage.
     *
     * @param int $id
     * @param UpdateTipo_clieRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipo_clieRequest $request)
    {
        $tipoClie = $this->tipoClieRepository->find($id);

        if (empty($tipoClie)) {
            Flash::error('Tipo Clie not found');

            return redirect(route('tipoClies.index'));
        }

        $tipoClie = $this->tipoClieRepository->update($request->all(), $id);

        Flash::success('Tipo Clie updated successfully.');

        return redirect(route('tipoClies.index'));
    }

    /**
     * Remove the specified Tipo_clie from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoClie = $this->tipoClieRepository->find($id);

        if (empty($tipoClie)) {
            Flash::error('Tipo Clie not found');

            return redirect(route('tipoClies.index'));
        }

        $this->tipoClieRepository->delete($id);

        Flash::success('Tipo Clie deleted successfully.');

        return redirect(route('tipoClies.index'));
    }
}
