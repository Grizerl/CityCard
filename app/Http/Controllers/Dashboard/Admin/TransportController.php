<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminDashboard\TransportRequest;
use App\Models\City;
use App\Models\Transport;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $transport = Transport::paginate(10);
        return view('dashboard.admin.transport.view', compact('transport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $city =  City::select('id', 'name')->get();
        return view('dashboard.admin.transport.transport-create', compact('city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\AdminDashboard\TransportRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TransportRequest $request): RedirectResponse
    {
        Transport::create($request->validated());
        return redirect()->back()->with('success', 'Transport created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show(): RedirectResponse
    {
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit(int $id): View
    {
        $transport = Transport::findOrFail($id);
        $city =  City::select('id', 'name')->get();
        return view('dashboard.admin.transport.transport-edit', compact('transport', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\AdminDashboard\TransportRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TransportRequest $request, int $id): RedirectResponse
    {
        $transport = Transport::findOrFail($id);

        $transport->update([
            'transport_type' => $request->transport_type,
            'transport_number' => $request->transport_number,
            'city_id' => $request->city_id
        ]);

        return redirect()->back()->with('success', 'The transport has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Transport::findOrFail($id)->delete();
        return redirect()->back();
    }
}
