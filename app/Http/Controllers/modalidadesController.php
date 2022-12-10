<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modalidades as mod;

class modalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modalidades.index', ['modalidades'=>mod::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modalidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);
        
        mod::create([
            'nomeModalidade' => $request->nomeModalidade,
            'img' => $imageName,
            'link' => $request->link      
        ]);  
            return redirect()->route('modalidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modalidade = mod::find($id);
        return view('modalidades.update', ['modalidade' => $modalidade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $modalidade = mod::find($id);
        $modalidade->nomeModalidade = $request->nomeModalidade;
        $modalidade->img = $imageName;
        $modalidade->link = $request->link;
        $modalidade->save();

        return redirect()->route('modalidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modalidade = mod::find($id)->delete();
        return redirect()->route('modalidades.index');
    }
}
