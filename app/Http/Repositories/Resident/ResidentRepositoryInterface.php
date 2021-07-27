<?php


namespace App\Http\Repositories\Resident;


interface ResidentRepositoryInterface
{
    public function index();

    public function store($request);

    public function show($id);

    public function update($request, $id);
}
