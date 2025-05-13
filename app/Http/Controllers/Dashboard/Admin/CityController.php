<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminDashboard\CityRequest;
use App\Models\City;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CityController extends Controller
{
    /**
     * Display listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $cities = City::paginate(10);
        return view('dashboard.admin.cities.view', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('dashboard.admin.cities.city-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\AdminDashboard\CityRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CityRequest $request): RedirectResponse
    {
        City::create($request->validated());
        return redirect()->back()->with('success', 'City created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit(int $id): View
    {
        $cities = City::findOrFail($id);
        return view('dashboard.admin.cities.city-edit', compact('cities'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show(int $id): RedirectResponse
    {
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param  \App\Http\Requests\AdminDashboard\CityRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CityRequest $request, int $id): RedirectResponse
    {
        $cities = City::findOrFail($id);

        $cities->update([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'The city has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        City::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'The city has been successfully deleted');
    }
}
