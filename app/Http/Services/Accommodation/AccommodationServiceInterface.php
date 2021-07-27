<?php


namespace App\Http\Services\Accommodation;


interface AccommodationServiceInterface
{

    public function index();

    public function store($request);

    public function show($id);

    public function update($request, $id);
}
