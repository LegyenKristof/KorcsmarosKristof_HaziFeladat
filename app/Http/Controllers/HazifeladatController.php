<?php

namespace App\Http\Controllers;

use App\Models\Hazifeladat;
use Illuminate\Http\Request;

class HazifeladatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hazifeladatok = Hazifeladat::all();
        return view("hazifeladatok/index", ["hazifeladatok" => $hazifeladatok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("hazifeladatok/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(["url", "ertekeles", "pontszam"]);
        $hazi = new Hazifeladat();
        $hazi->fill($data);
        $hazi->save();
        return redirect("hazifeladatok");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hazi = Hazifeladat::find($id);
        return view("hazifeladatok/edit", ["hazi" => $hazi]);
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
        $data = $request->only(["url", "ertekeles", "pontszam"]);
        $hazi = Hazifeladat::find($id);
        $hazi->fill($data);
        $hazi->save();
        return redirect("hazifeladatok");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hazifeladat::destroy($id);
        return redirect("hazifeladatok");
    }
}
