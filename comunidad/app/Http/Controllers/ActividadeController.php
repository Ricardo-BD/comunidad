<?php

namespace App\Http\Controllers;

use App\Actividade;
use Illuminate\Http\Request;

class ActividadeController extends Controller
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
        $actividades = Actividade::all();
        return view('actividades.create', compact('actividades'));
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
            'nombre'=>'required',
            'multa' => 'required',
        ]);
        Actividade::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actividade  $actividade
     * @return \Illuminate\Http\Response
     */
    public function show(Actividade $actividade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actividade  $actividade
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividade $actividade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actividade  $actividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[ 
            'nombre'=>'required',
            'multa'=>'required',
            
        ]);
 
        Actividade::find($id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actividade  $actividade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Actividade::find($id)->delete();
        return back();
    }
}
