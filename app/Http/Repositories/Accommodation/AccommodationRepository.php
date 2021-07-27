<?php


namespace App\Http\Repositories\Accommodation;

use App\ResidentResidence;
use App\Resident;
use App\Residence;

class AccommodationRepository implements AccommodationRepositoryInterface
{
    private $residentResidence;
    private $resident;
    private $residence;

    /**
     * AccommodationRepository constructor.
     * @param ResidentResidence $residentResidence
     * @param Resident $resident
     * @param Residence $residence
     */
    public function __construct(
        ResidentResidence $residentResidence,
        Resident $resident,
        Residence $residence)
    {
        $this->residentResidence = $residentResidence;
        $this->resident = $resident;
        $this->residence = $residence;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->residentResidence
            ->where('status', 'active')
            ->with(['residences', 'resident'])
            ->get();
    }

    /**
     * @param $request
     * @return bool
     */
    public function store($request)
    {
        try {
            return $this->residentResidence
                ->create($request);
        } catch (\Exception $exception) {
            return false;
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->residentResidence
            ->where('id', $id)
            ->first();
    }

    /**
     * @param $request
     * @param $id
     * @return bool
     */
    public function update($request, $id)
    {
        try {
            return $this->residentResidence
                ->where('id', $id)
                ->update($request);
        } catch (\Exception $exception) {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getAccommodationData()
    {
        $return['resident'] = $this->resident
            ->select('residents.name', 'residents.id')
            ->leftjoin('resident_residences', 'resident_residences.resident_id', 'residents.id')
            ->whereNull('resident_residences.status')
            ->orWhere('resident_residences.status', '!=', 'active')
            ->get();
        $return['residence'] = $this->residence
            ->select('residences.title', 'residences.id')
            ->leftjoin('resident_residences', 'resident_residences.residences_id', 'residences.id')
            ->whereNull('resident_residences.status')
            ->orWhere('resident_residences.status', '!=', 'active')
            ->get();

        return $return;
    }
}
