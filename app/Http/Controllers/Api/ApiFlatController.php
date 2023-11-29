<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use Illuminate\Http\Request;

class ApiFlatController extends Controller
{
    /**
     * получить данные с пагинацией
     */
    public function apiIndex()
    {
        return Flat::join('houses', 'flats.house_id', '=', 'houses.id')
            ->join('projects', 'houses.project_id', '=', 'projects.id')
            ->select(
                'flats.id',
                'flats.name',
                'flats.area', 
                'flats.rooms', 
                'flats.layout', 
                'flats.cost', 
                'flats.house_id', 
                'houses.name as house_name',
                'projects.name as project_name')->paginate(8);
    }
}
