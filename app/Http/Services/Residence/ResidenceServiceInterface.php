<?php


namespace App\Http\Services\Residence;


interface ResidenceServiceInterface
{
    public function index();

    public function store($request);

    public function show($id);

    public function update($request, $id);
}
