<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['address'];

    public function departaments()
    {
        return $this->hasMany(AddressDepartament::class);
    }

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
