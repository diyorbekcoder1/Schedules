<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function group(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return $this->belongsTo(Groups::class, 'group_id');

    }
    public function week()
    {

        return $this->belongsTo(Week::class, 'week_id');

    }
}