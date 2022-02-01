<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Superhero as SuperheroResource;
use App\Http\Resources\SuperheroCollection;
use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperherosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Superhero::all();
        return new SuperheroCollection($heroes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hero = Superhero::create($request->all());
        
        return new SuperheroResource($hero);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Superhero $superhero)
    {
        return new SuperheroResource($superhero);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Superhero $superhero)
    {
        $superhero->update($request->all());

        return new SuperheroResource($superhero);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();

        return ["status" => "deleted"];
    }
}
