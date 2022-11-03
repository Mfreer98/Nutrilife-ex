<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index()
    {
        //
        if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2) {
            $recipes = Recipe::all();
            return view('recipes.index', compact('recipes'));
        } else {
            return '<h5>FORBIDDEN</h5>';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2) {
            return view('recipes.create');
        } else {
            return '<h5>FORBIDDEN</h5>';
        }
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
        $file = "";
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = $request->name . '.' . $file->extension();
            $file->move(public_path('img'), $filename);

        } else {
            $file = "Imagen nula";
        }

        $recipes = Recipes::create([
            'img' => $filename,
            'name' => $request->name,
            'calories' => $request->calories,
            'instructions' => $request->instructions,
            'ingredients' => $request->ingredients,
            'servings' => $request->servings,
            'notes' => $request->notes,

        ]);
        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
        return "troleado";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //

        if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2) {
            return view('recipes.edit', compact('recipe'));
        } else {
            return '<h5>FORBIDDEN</h5>';
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //

        $recipe->update($request->all());
        return redirect()->route('recipes.index')->with('message', 'La receta fue editada con exito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
        $recipe->delete();
        return redirect()->route('recipes.index')->with('message', 'La receta fue eliminada con exito!');
    }
}