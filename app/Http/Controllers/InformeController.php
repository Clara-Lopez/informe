<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInformeRequest;
use App\Http\Requests\UpdateInformeRequest;
use App\Repositories\InformeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Informe;

class InformeController extends AppBaseController
{
    /** @var  InformeRepository */
    private $informeRepository;

    public function __construct(InformeRepository $informeRepo)
    {
        $this->informeRepository = $informeRepo;
    }

    /**
     * Display a listing of the Informe.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $informes = $this->informeRepository->all();

        return view('informes.index')
            ->with('informes', $informes);
    }
     public function inicio(Request $request)
    {
        $informes = Informe::all();
 
       return view('home',compact('informes'));
    }

    /**
     * Show the form for creating a new Informe.
     *
     * @return Response
     */
    public function create()
    {
        return view('informes.create');
    }

    /**
     * Store a newly created Informe in storage.
     *
     * @param CreateInformeRequest $request
     *
     * @return Response
     */
    public function store(CreateInformeRequest $request)
    {
        $input = $request->all();

        $informe = $this->informeRepository->create($input);

        Flash::success('Informe guardado correctamente.');

        return redirect(route('informes.index'));
    }

    /**
     * Display the specified Informe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $informe = $this->informeRepository->find($id);

        if (empty($informe)) {
            Flash::error('Informe no encontrado.');

            return redirect(route('informes.index'));
        }

        return view('informes.show')->with('informe', $informe);
    }

    /**
     * Show the form for editing the specified Informe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $informe = $this->informeRepository->find($id);

        if (empty($informe)) {
            Flash::error('Informe no encontrado.');

            return redirect(route('informes.index'));
        }

        return view('informes.edit')->with('informe', $informe);
    }

    /**
     * Update the specified Informe in storage.
     *
     * @param int $id
     * @param UpdateInformeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInformeRequest $request)
    {
        $informe = $this->informeRepository->find($id);

        if (empty($informe)) {
            Flash::error('Informe no encontrado');

            return redirect(route('informes.index'));
        }

        $informe = $this->informeRepository->update($request->all(), $id);

        Flash::success('Informe actualizado correctamente.');

        return redirect(route('informes.index'));
    }

    /**
     * Remove the specified Informe from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $informe = $this->informeRepository->find($id);

        if (empty($informe)) {
            Flash::error('Informe no encontrado.');

            return redirect(route('informes.index'));
        }

        $this->informeRepository->delete($id);

        Flash::success('Informe eliminado correctamente.');

        return redirect(route('informes.index'));
    }
}