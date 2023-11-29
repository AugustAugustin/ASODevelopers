<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'area', 'rooms', 'layout', 'cost', 'house_id'
    ];

    public function house()
    {
        return $this->belongsTo(House::class);
    }
    
}
