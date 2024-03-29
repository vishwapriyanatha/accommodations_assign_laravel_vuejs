<?php


namespace App\Http\Services\Invoice;

use App\Http\Repositories\Invoice\InvoiceRepository;
use App\Http\Helper\Helper;

class InvoiceService implements InvoiceServiceInterface
{
    private $invoice;

    /**
     * InvoiceService constructor.
     *
     * @param InvoiceRepository $invoice
     */
    public function __construct(InvoiceRepository $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->invoice->index();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $data = $this->invoice->show($id);
        $price = $data['residences']['price'];
        $tax = Helper::countTax($price);

        $return['invoice_data'] = $data;
        $return['tax'] = $tax;
        $return['total'] = $price + $tax;

        return $return;
    }
}
