<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Resident\ResidentService;


class ResidentController extends Controller
{
    private $residentService;

    /**
     * ResidentController constructor.
     *
     * @param ResidentService $residentService
     */
    public function __construct(ResidentService $residentService)
    {
        $this->residentService = $residentService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return $this->residentService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        return $this->residentService->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return $this->residentService->store($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->residentService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        return $this->residentService->edit($id);
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
        return $this->residentService->update($request->all(), $id);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->residentService->getTitle();
    }

}
