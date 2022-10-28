<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use Symfony\Component\HttpFoundation\Response;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2) {
            $foods = Food::all();
            return view('food.index', compact('foods'));
        }
        else {
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
            return view('food.create');
        }
        else {
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

        }
        else {
            $file = "Imagen nula";
        }

        $food = Food::create([
            'img' => $filename,
            'name' => $request->name,
            'carbs' => $request->carbs,
            'protein' => $request->protein,
            'fat' => $request->fat,
            'calories' => $request->calories,
            'is_active' => 1,
        ]);
        return redirect()->route('food.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
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
    public function edit(Food $food)
    {
        //

        if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2) {
            return view('food.edit', compact('food'));
        }
        else {
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
    public function update(Request $request, Food $food)
    {
        //

        $food->update($request->all());
        return redirect()->route('food.index')->with('message', 'El usuario fue editado con exito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
        $food->delete();
        return redirect()->route('food.index')->with('message', 'El usuario fue editado con exito!');
    }

    private function storeImage(Request $request)
    {


    }
}