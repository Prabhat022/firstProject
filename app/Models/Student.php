<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "users";
    protected $primaryKey = "id";

    // public function setNameAttribute($value) {
    //     $this->attributes['name'] = ucwords($value);
    // }
    // public function getCountryAttribute($value) {
    //     $this->attributes['country'] = strtoupper($value);
    //     return $this->attributes['country'];
    // }
}
