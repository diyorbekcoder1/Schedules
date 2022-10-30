<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function course()
    {

        return $this->belongsTo(Courses::class, 'courses_id');

    }

    public function schedules()
    {

        return $this->hasMany(Schedules::class, 'group_id');

    }
}
