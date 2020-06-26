<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResidentResidence extends Model
{
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
