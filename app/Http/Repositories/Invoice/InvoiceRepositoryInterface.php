<?php


namespace App\Http\Repositories\Invoice;


interface InvoiceRepositoryInterface
{
    public function index();

    public function show($id);
}
