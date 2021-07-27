<?php


namespace App\Http\Repositories\Resident;

use App\Resident;
use App\Title;

class ResidentRepository implements ResidentRepositoryInterface
{
    private $resident;
    private $title;

    /**
     * ResidentRepository constructor.
     *
     * @param Resident $resident
     * @param Title $title
     */
    public function __construct(
        Resident $resident,
        Title $title)
    {
        $this->resident = $resident;
        $this->title = $title;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->resident
            ->with('resident_title')
            ->get();
    }

    /**
     * @param $request
     * @return bool
     */
    public function store($request)
    {
        try {
            return $this->resident
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
        return $this->resident
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
            return $this->resident
                ->where('id', $id)
                ->update($request);
        } catch (\Exception $exception) {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title
            ->orderby('name')
            ->get();
    }
}
