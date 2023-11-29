<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('house.index', ['houses' => House::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('house.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'date_of_delivery' => 'required',
            'project_id' =>  'required',
        ]);
        House::create($data);
        return redirect('houses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('house.show', ['house' => House::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('house.edit', ['house' => House::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'date_of_delivery' => 'required',
            'project_id' =>  'required',
        ]);
        $house = House::find($id);
        $house->update($data);
        return redirect('houses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        House::destroy($id);
        return redirect('houses');
    }
}
