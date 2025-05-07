<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminDashboard\TiketRequest;
use App\Models\Tiket_Type;
use App\Models\Transport;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Tiket_Type::all();
        return view('dashboard.admin.tiket-type.view', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transport = Transport::all();
        return view('dashboard.admin.tiket-type.tiket-create', compact('transport'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TiketRequest $request)
    {
        Tiket_Type::create($request->all());
        return redirect()->back()->with('success', 'Tiket created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tiket_Type $tiket_Type)
    {
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ticket = Tiket_Type::findOrFail($id);
        $transport = Transport::all();
        return view('dashboard.admin.tiket-type.tiket-edit',compact('ticket', 'transport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TiketRequest $request, $id)
    {
        $ticket = Tiket_Type::findOrFail($id);

        $ticket->update([
            'name' => $request->name,
            'price' => $request->price,
            'transport_id' => $request->transport_id
        ]);

        return redirect()->back()->with('success', 'The tiket has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ticket = Tiket_Type::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'The tiket has been successfully deleted');
    }
}
