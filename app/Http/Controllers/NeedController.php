<?php

namespace App\Http\Controllers;

use App\Models\Need;
use App\Http\Requests\StoreNeedRequest;
use App\Http\Requests\UpdateNeedRequest;

class NeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNeedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNeedRequest $request)
    {
        $need = new Need();

        $need = Need::create([
            'name' => $request->name,
            'blood' => $request->blood,
            'hospital' => $request->hospital,
            'city' => $request->city,
            'contact' => $request->contact,
            'type' => $request->type,
            'quantity' => $request->quantity,
            'date' => $request->date
        ]);

        $need->save();

		return redirect('/permohonan')->with('success', 'Berhasil Mengirim Permohonan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function show(Need $need)
    {
        return view('dashboard.request', [
			'need' => $need
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function edit(Need $need)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeedRequest  $request
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeedRequest $request, Need $need)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function destroy(Need $need)
    {
        $need->delete();
        
        return redirect()->back();
    }
}
