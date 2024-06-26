<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FineBatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'boleta_inicial',
        'boleta_final',
        'user_id',
        'created_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
