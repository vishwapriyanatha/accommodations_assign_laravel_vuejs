<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residence;

class ResidenceController extends Controller
{
    private $Residence;

    /**
     * ResidenceController constructor.
     * @param Residence $Residence
     */
    public function __construct(Residence $Residence)
    {
        $this->Residence = $Residence;
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function saveResidence(Request $request)
    {
        try {
            return $this->Residence->create($request->all());
        } catch (\Exception $exception) {
            return false;
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getResidence($id)
    {
        return $this->Residence->where('id', $id)->first();
    }

    /**
     * @param $id
     * @param Request $request
     * @return bool
     */
    public function updateResidence($id, Request $request)
    {
        try {
            return $this->Residence->where('id', $id)->update($request->all());
        } catch (\Exception $exception) {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getAllResidence()
    {
        return $this->Residence->get();
    }
}
