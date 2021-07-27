<?php


namespace App\Http\Repositories\Residence;


interface ResidenceRepositoryInterface
{
    public function index();

    public function store($request);

    public function show($id);

    public function update($request, $id);
}
