<?php


namespace App\Http\Services\Residence;

use App\Http\Repositories\Residence\ResidenceRepository;

class ResidenceService implements ResidenceServiceInterface
{
    private $residenceRepository;

    /**
     * ResidenceService constructor.
     *
     * @param ResidenceRepository $residenceRepository
     */
    public function __construct(ResidenceRepository $residenceRepository)
    {
        $this->residenceRepository = $residenceRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->residenceRepository->index();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function store($request)
    {
        return $this->residenceRepository->store($request);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->residenceRepository->show($id);
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id)
    {
        return $this->residenceRepository->update($request, $id);
    }
}
