<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminDashboard\TransportRequest;
use App\Models\Citi;
use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transport = Transport::all();
        return view('dashboard.admin.transport.view', compact('transport'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $city =  Citi::all();
        return view('dashboard.admin.transport.transport-create', compact('city'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransportRequest $request)
    {
        Transport::create($request->all());
        return redirect()->back()->with('success', 'Transport created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transport $transport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transport = Transport::findOrFail($id);
        $city =  Citi::all();
        return view('dashboard.admin.transport.transport-edit',compact('transport', 'city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransportRequest $request, $id)
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
     */
    public function destroy($id)
    {
        $transport = Transport::findOrFail($id)->delete();
        return redirect()->back();
    }
}
