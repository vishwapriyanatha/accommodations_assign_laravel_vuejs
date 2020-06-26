<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $fillable = ['title', 'name', 'date_of_birth', 'nic_number', 'mobile_number'];

    public function resident_title()
    {
        return $this->hasOne(Title::class, 'id', 'title');
    }
}
