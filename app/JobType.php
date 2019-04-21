<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
