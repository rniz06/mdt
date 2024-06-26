<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitizenType extends Model
{
    use HasFactory;

    public function citizens()
    {
        return $this->hasMany(Citizen::class);
    }
}
