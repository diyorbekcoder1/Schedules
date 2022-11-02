<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Courses extends Model
{
    use HasFactory;
    protected $fillable=['name','status'];
    protected $guarded = [];

    public function faculties()
    {

        return $this->belongsTo(Faculties::class, 'facult_id');

    }

    public function groups()
    {

        return $this->hasMany(Groups::class, 'courses_id');

    }


}
