<?php


namespace App\Http\Repositories\Accommodation;


interface AccommodationRepositoryInterface
{
    public function index();

    public function store($request);

    public function show($id);

    public function update($request, $id);
}
