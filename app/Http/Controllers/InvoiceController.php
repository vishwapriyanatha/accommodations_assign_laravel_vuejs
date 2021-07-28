<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Invoice\InvoiceService;

class InvoiceController extends Controller
{
    private $invoice;

    public function __construct(InvoiceService $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
       return $this->invoice->index();
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->invoice->show($id);
    }

}
