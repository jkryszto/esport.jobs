<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function job_level()
    {
        return $this->belongsTo(JobLevel::class);
    }

    public function job_type()
    {
        return $this->belongsTo(JobType::class);
    }
}
