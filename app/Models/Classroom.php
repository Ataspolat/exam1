<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    // one to many
    public function locations()
    {
        return $this->hasMany(location::class);
    }
}
