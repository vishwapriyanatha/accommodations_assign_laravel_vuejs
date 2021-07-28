<?php


namespace App\Http\Services\Invoice;


interface InvoiceServiceInterface
{
    public function index();

    public function show($id);
}
