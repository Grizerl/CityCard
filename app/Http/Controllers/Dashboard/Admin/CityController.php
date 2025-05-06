<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminDashboard\CityRequest;
use App\Models\Citi;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = Citi::all();
        return view('dashboard.admin.cities.view', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.cities.city-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CityRequest $request)
    {
        Citi::create($request->all());
        return redirect()->back()->with('success', 'City created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cities = Citi::findOrFail($id);
        return view('dashboard.admin.cities.city-edit', compact('cities'));
    }

    public function show($id)
    {
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CityRequest $request, $id)
    {
        $cities = Citi::findOrFail($id);

        $cities->update([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'The city has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cities = Citi::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'The city has been successfully deleted');
    }
}
