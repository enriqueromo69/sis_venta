<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCelularRequest;
use App\Http\Requests\UpdateCelularRequest;
use App\Repositories\CelularRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CelularController extends AppBaseController
{
    /** @var  CelularRepository */
    private $celularRepository;

    public function __construct(CelularRepository $celularRepo)
    {
        $this->celularRepository = $celularRepo;
    }

    /**
     * Display a listing of the Celular.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $celulars = $this->celularRepository->all();

        return view('celulars.index')
            ->with('celulars', $celulars);
    }

    /**
     * Show the form for creating a new Celular.
     *
     * @return Response
     */
    public function create()
    {
        return view('celulars.create');
    }

    /**
     * Store a newly created Celular in storage.
     *
     * @param CreateCelularRequest $request
     *
     * @return Response
     */
    public function store(CreateCelularRequest $request)
    {
        $input = $request->all();

        $celular = $this->celularRepository->create($input);

        Flash::success('Celular saved successfully.');

        return redirect(route('celulars.index'));
    }

    /**
     * Display the specified Celular.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $celular = $this->celularRepository->find($id);

        if (empty($celular)) {
            Flash::error('Celular not found');

            return redirect(route('celulars.index'));
        }

        return view('celulars.show')->with('celular', $celular);
    }

    /**
     * Show the form for editing the specified Celular.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $celular = $this->celularRepository->find($id);

        if (empty($celular)) {
            Flash::error('Celular not found');

            return redirect(route('celulars.index'));
        }

        return view('celulars.edit')->with('celular', $celular);
    }

    /**
     * Update the specified Celular in storage.
     *
     * @param int $id
     * @param UpdateCelularRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCelularRequest $request)
    {
        $celular = $this->celularRepository->find($id);

        if (empty($celular)) {
            Flash::error('Celular not found');

            return redirect(route('celulars.index'));
        }

        $celular = $this->celularRepository->update($request->all(), $id);

        Flash::success('Celular updated successfully.');

        return redirect(route('celulars.index'));
    }

    /**
     * Remove the specified Celular from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $celular = $this->celularRepository->find($id);

        if (empty($celular)) {
            Flash::error('Celular not found');

            return redirect(route('celulars.index'));
        }

        $this->celularRepository->delete($id);

        Flash::success('Celular deleted successfully.');

        return redirect(route('celulars.index'));
    }
}
