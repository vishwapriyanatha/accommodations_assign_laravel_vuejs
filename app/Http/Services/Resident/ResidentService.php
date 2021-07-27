<?php


namespace App\Http\Services\Resident;

use App\Http\Repositories\Resident\ResidentRepository;

class ResidentService implements ResidentServiceInterface
{
    private $residentRepository;

    /**
     * ResidentService constructor.
     *
     * @param ResidentRepository $residentRepository
     */
    public function __construct(ResidentRepository $residentRepository)
    {
        $this->residentRepository = $residentRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->residentRepository->index();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function store($request)
    {
        return $this->residentRepository->store($request);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->residentRepository->show($id);
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id)
    {
        return $this->residentRepository->update($request, $id);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->residentRepository->getTitle();
    }
}
