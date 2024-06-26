<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressDepartament extends Model
{
    use HasFactory;

    protected $fillable = ['departament', 'address_id'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
