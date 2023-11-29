<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('flat.index', ['flats' => Flat::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'area' => 'required',
            'rooms' =>  'required',
            'layout' => 'required',
            'cost' => 'required',
            'house_id' =>  'required',
        ]);
        Flat::create($data);
        return redirect('flats');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('flat.show', ['flat' => Flat::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('flat.edit', ['flat' => Flat::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'area' => 'required',
            'rooms' =>  'required',
            'layout' => 'required',
            'cost' => 'required',
            'house_id' =>  'required',
        ]);
        $flat = Flat::find($id);
        $flat->update($data);
        return redirect('flats');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Flat::destroy($id);
        return redirect('flats');
    }
    
    /**
     * средняя стоимость квартир проекта
     */
    public function averageCostProject(string $id)
    {
        return Flat::join('houses', 'flats.house_id', '=', 'houses.id')
        ->join('projects', 'houses.project_id', '=', 'projects.id')
        ->select(DB::raw('AVG(flats.cost) as average_cost'))
        ->where('projects.id', $id)
        ->groupBy('projects.id')->value('average_cost');
    }
}
