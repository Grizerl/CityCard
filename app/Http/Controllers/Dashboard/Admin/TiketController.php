<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminDashboard\TiketRequest;
use App\Models\Ticket_Type;
use App\Models\Transport;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $ticket = Ticket_Type::paginate(10);
        return view('dashboard.admin.tiket-type.view', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $transport = Transport::select('id', 'transport_number')->get();
        return view('dashboard.admin.tiket-type.tiket-create', compact('transport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\AdminDashboard\TiketRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TiketRequest $request): RedirectResponse
    {
        Ticket_Type::create($request->validated());
        return redirect()->back()->with('success', 'Tiket created successfully.');
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
        $ticket = Ticket_Type::findOrFail($id);
        $transport = Transport::select('id', 'transport_number')->get();
        return view('dashboard.admin.tiket-type.tiket-edit', compact('ticket', 'transport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\AdminDashboard\TiketRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TiketRequest $request, int $id): RedirectResponse
    {
        $ticket = Ticket_Type::findOrFail($id);

        $ticket->update([
            'name' => $request->name,
            'price' => $request->price,
            'transport_id' => $request->transport_id
        ]);

        return redirect()->back()->with('success', 'The tiket has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Ticket_Type::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'The tiket has been successfully deleted');
    }
}
