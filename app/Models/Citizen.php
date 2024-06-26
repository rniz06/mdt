<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ci', 'ruc', 'email', 'phone_number', 'streep', 'district_id', 'citizen_type_id'];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function citizen_type()
    {
        return $this->belongsTo(CitizenType::class);
    }

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }

    public function fines()
    {
        return $this->hasMany(Fine::class);
    }
}
