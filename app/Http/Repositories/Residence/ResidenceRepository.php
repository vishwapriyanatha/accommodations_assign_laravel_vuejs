<?php


namespace App\Http\Repositories\Residence;

use App\Residence;

class ResidenceRepository implements ResidenceRepositoryInterface
{
    private $residence;

    /**
     * ResidenceRepository constructor.
     *
     * @param Residence $residence
     */
    public function __construct(Residence $residence)
    {
        $this->residence = $residence;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->residence->get();
    }

    /**
     * @param $request
     * @return bool
     */
    public function store($request)
    {
        try {
            return $this->residence
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
        return $this->residence
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
            return $this->residence
                ->where('id', $id)
                ->update($request);
        } catch (\Exception $exception) {
            return false;
        }
    }
}
