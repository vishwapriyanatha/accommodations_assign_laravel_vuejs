<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use App\Resident;

class ResidentController extends Controller
{
    private $Title;
    private $Resident;

    /**
     * ResidentController constructor.
     * @param Title $Title
     * @param Resident $Resident
     */
    public function __construct(Title $Title, Resident $Resident)
    {
        $this->Title = $Title;
        $this->Resident = $Resident;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->Title->get();
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function saveResident(Request $request)
    {
        try {
            return $this->Resident->create($request->all());
        } catch (\Exception $exception) {
            return false;
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getResident($id)
    {
        return $this->Resident->where('id', $id)->first();
    }

    /**
     * @param $id
     * @param Request $request
     * @return bool
     */
    public function updateResident($id, Request $request)
    {
        try {
            return $this->Resident->where('id', $id)->update($request->all());
        } catch (\Exception $exception) {
            return false;
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllResident()
    {
        return $this->Resident->with('resident_title')->get();
    }
}
