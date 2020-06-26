<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResidentResidence;
use App\Resident;
use App\Residence;

class HomeController extends Controller
{

    private $ResidentResidence;
    private $Resident;
    private $Residence;

    /**
     * HomeController constructor.
     * @param ResidentResidence $ResidentResidence
     * @param Resident $Resident
     * @param Residence $Residence
     */
    public function __construct(ResidentResidence $ResidentResidence, Resident $Resident, Residence $Residence)
    {
        $this->middleware('auth');
        $this->ResidentResidence = $ResidentResidence;
        $this->Resident = $Resident;
        $this->Residence = $Residence;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function saveResidence(Request $request)
    {
        try {
            return $this->ResidentResidence->create($request->all());
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
        return $this->ResidentResidence->where('id', $id)->first();
    }

    /**
     * @param $id
     * @param Request $request
     * @return bool
     */
    public function updateResidence($id, Request $request)
    {
        try {
            return $this->ResidentResidence->where('id', $id)->update($request->all());
        } catch (\Exception $exception) {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getAllResidence()
    {
        return $this->ResidentResidence->with(['residences', 'resident'])->get();
    }

    public function getAccomodationData()
    {
        $return['resident'] = $this->Resident->select('residents.name', 'residents.id')
            ->leftjoin('resident_residences', 'resident_residences.resident_id', 'residents.id')
//            ->where('resident_residences.status', 'active')
            ->get();
        $return['residence'] = $this->Residence->select('residences.title', 'residences.id')
            ->leftjoin('resident_residences', 'resident_residences.residences_id', 'residences.id')
//            ->where('resident_residences.status', 'active')
            ->get();

        return $return;
    }
}
