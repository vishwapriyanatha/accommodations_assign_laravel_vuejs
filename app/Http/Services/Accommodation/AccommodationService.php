<?php


namespace App\Http\Services\Accommodation;

use App\Http\Repositories\Accommodation\AccommodationRepository;

class AccommodationService implements AccommodationServiceInterface
{
    private $accommodation;

    /**
     * AccommodationService constructor.
     *
     * @param AccommodationRepository $accommodation
     */
    public function __construct(AccommodationRepository $accommodation)
    {
        $this->accommodation = $accommodation;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->accommodation->index();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function store($request)
    {
        return $this->accommodation->store($request);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->accommodation->show($id);
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id)
    {
        return $this->accommodation->update($request, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->accommodation->destroy($id);
    }

    /**
     * @return mixed
     */
    public function getAccommodationData()
    {
        return $this->accommodation->getAccommodationData();
    }
}
