<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResidentResidence extends Model
{
    use SoftDeletes;

    protected $fillable = ['residences_id', 'resident_id', 'status'];

    public function residences()
    {
        return $this->hasOne(Residence::class, 'id', 'residences_id');
    }

    public function resident()
    {
        return $this->hasOne(Resident::class, 'id', 'resident_id');
    }
}
