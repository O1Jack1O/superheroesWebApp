<?php

namespace App\Http\Controllers;

use App\Superhero;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $Request
     * @param Superhero $Superhero
     * @return Response
     */
    public function index()
    {
        $Superheroes = Superhero::paginate(5);

        return view('superhero', compact('Superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Superhero $superhero
     * @return Response
     */
    public function show(Superhero $superhero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Superhero $superhero
     * @return Response
     */
    public function edit(Superhero $superhero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Superhero $superhero
     * @return Response
     */
    public function update(Request $request, Superhero $superhero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Superhero $superhero
     * @return Response
     */
    public function destroy(Superhero $superhero)
    {
        //
    }
}
