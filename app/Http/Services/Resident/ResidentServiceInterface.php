<?php


namespace App\Http\Services\Resident;


interface ResidentServiceInterface
{

    public function index();

    public function store($request);

    public function show($id);

    public function update($request, $id);
}
