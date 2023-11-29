<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'date_of_delivery', 'project_id'
    ];

    public function getKeyName()
    {
        return 'house_id';
    }
}
