<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Residence\ResidenceService;

class ResidenceController extends Controller
{
    private $residenceService;

    /**
     * ResidenceController constructor.
     *
     * @param ResidenceService $residenceService
     */
    public function __construct(ResidenceService $residenceService)
    {
        $this->residenceService = $residenceService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return $this->residenceService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        return $this->residenceService->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return $this->residenceService->store($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->residenceService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        return $this->residenceService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        return $this->residenceService->update($request->all(),$id);
    }
}
