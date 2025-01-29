<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facility extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'image',
        'name',
        'description'
    ];

    public function classes(){
        return $this->belongsToMany(Facility::class, 'flight_class_facility','flight_class_id','facility_id');

    }
}
