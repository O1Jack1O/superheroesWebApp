<?php

namespace App\Http\Controllers;

use App\Superhero;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Superheroes = Superhero::paginate(5);
        return view('pages.index', compact('Superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.formCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $Superhero = new Superhero();

        if ($request->file('image')) $Superhero->url_image = $this->imageValidation($request->file('image'));
        $Superhero->nickname​ = $request->input('nickname​');
        $Superhero->real_name​ = $request->input('real_name');
        $Superhero->origin_description​ = $request->input('origin_description');
        $Superhero->superpowers = $request->input('superpowers');
        $Superhero->catch_phrase = $request->input('catch_phrase');
        $Superhero->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param Superhero $superhero
     * @return Response
     */
    public function show(Superhero $superhero)
    {
        return view('pages.show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Superhero $superhero
     * @return Response
     */
    public function edit(Superhero $superhero)
    {

        return view('pages.formEdit', compact('superhero'));
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
        if ($request->file('image')) $superhero->url_image = $this->imageValidation($request->file('image'));
        $superhero->nickname​ = $request->input('nickname​');
        $superhero->real_name​ = $request->input('real_name');
        $superhero->origin_description​ = $request->input('origin_description');
        $superhero->superpowers = $request->input('superpowers');
        $superhero->catch_phrase = $request->input('catch_phrase');
        $superhero->update();

        //return $this->index();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Superhero $superhero
     * @return Response
     * @throws Exception
     */
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->back();
    }

    public function imageValidation($image)
    {
        $validator = Validator::make(request()->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);
        if ($validator->fails()) {
            return redirect('superheroes/create')
                ->withErrors($validator)
                ->withInput();
        }

        $path = $image->store('images', 'public');

        return $path;
    }
}
