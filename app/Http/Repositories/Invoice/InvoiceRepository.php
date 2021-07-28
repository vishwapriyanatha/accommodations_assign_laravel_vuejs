<?php


namespace App\Http\Repositories\Invoice;

use App\ResidentResidence;

class InvoiceRepository implements InvoiceRepositoryInterface
{
    private $residentResidence;

    public function __construct(ResidentResidence $residentResidence)
    {
        $this->residentResidence = $residentResidence;
    }

    public function index()
    {
        return $this->residentResidence
            ->with(['residences', 'resident'])
            ->onlyTrashed()
            ->get();
    }

    public function show($id)
    {
        return $this->residentResidence
            ->with([
                'residences',
                'resident',
                'resident.resident_title'
            ])
            ->where('id', $id)
            ->withTrashed()
            ->first();
    }
}
