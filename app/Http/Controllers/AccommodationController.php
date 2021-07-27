<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Accommodation\AccommodationService;

class AccommodationController extends Controller
{
    private $accommodation;

    /**
     * AccommodationController constructor.
     *
     * @param AccommodationService $accommodation
     */
    public function __construct(AccommodationService $accommodation)
    {
        $this->accommodation = $accommodation;
    }

    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return $this->accommodation->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        return $this->accommodation->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return $this->accommodation->store($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->accommodation->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        return $this->accommodation->edit($id);
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
        return $this->accommodation->update($request->all(), $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->accommodation->destroy($id);
    }

    /**
     * @return mixed
     */
    public function getAccommodationData()
    {
        return $this->accommodation->getAccommodationData();
    }
}
