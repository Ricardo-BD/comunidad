<?php

namespace App\Http\Controllers;

use App\Barrio;
use Illuminate\Http\Request;

class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('barrios.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barrios = Barrio::all();
        
        return view('barrios.create', compact('barrios'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 
            'nombre'=>'required'
        ]);
        Barrio::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function show(Barrio $barrio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function edit(Barrio $barrio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[ 
            'nombre'=>'required', 
        ]);
 
        Barrio::find($id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barrio  $barrio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Barrio::find($id)->delete();
        return back();

    }
}
