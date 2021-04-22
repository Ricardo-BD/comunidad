<?php

namespace App\Http\Controllers;

use App\Ciudadano;
use App\Cargo;
use App\Barrio;
use App\Actividade;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class CiudadanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportarPdf()
    {
        $ciudadanos = Ciudadano::get();
        $pdf = PDF::loadView('pdf.ciudadanos', compact('ciudadanos'));

        return $pdf->setPaper('a4', 'landscape')->download('Reporte_ciudadanos.pdf');
    }

    public function certificadoPdf($id)
    {
        $ciudadanos = Ciudadano::find($id);
        $pdf = PDF::loadView('pdf.certificado', compact('ciudadanos'));

        return $pdf->setPaper('a4', 'landscape')->download('certificado.pdf');
    }


    public function index()
    {
        //
        $cargos = Cargo::all();
        $barrios = Barrio::all();
        $actividades = Actividade::all();
        return view('ciudadanos/registro', compact('cargos', 'barrios', 'actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ciudadanos = Ciudadano::all();

        $cargos = Cargo::all();
        $barrios = Barrio::all();
        $actividades = Actividade::all();
        return view('ciudadanos.index', compact('ciudadanos','cargos', 'barrios', 'actividades'));
        
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
            'apellidoP'=>'required',
            'apellidoM'=>'required',
            'idbarrio'=>'required',
            'idcargo'=>'required',
            'idactividad'=>'nullable',
            'estatus' => 'required',

        ]);
        Ciudadano::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $ciudadanos = Ciudadano::all();
        return view('ciudadanos.actividades', compact('ciudadanos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudadano $ciudadano)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
      
        $this->validate($request,[ 
            'nombre'=>'required',
            'apellidoP'=>'required',
            'apellidoM'=>'required',
            'idbarrio'=>'required',
            'idcargo'=>'required',
            'idactividad'=>'nullable',
            'estatus' => 'required',
 
        ]);
 
        Ciudadano::find($id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Ciudadano::find($id)->delete();
        return back();
    }
}
