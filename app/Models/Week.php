<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function schedules()
    {

        return $this->hasMany(Schedules::class, 'week_id');

    }
}
