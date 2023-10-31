<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Food::all();
        return view('admin.pages.foodall', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.createfood');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nameFood' => 'required',
            'priceFood' => 'required',
            'categoriesFood' => 'required',
            'stockFood' => 'required',
            'foodImg' => 'required'
        ], [
            'nameFood.required' => 'makanan harus diisi',
            'priceFood.required' => 'harga harus diisi',
            'categoriesFood.required' => 'kategori makanan harus dipilih',
            'stockFood.required' => 'stok wajib diisi',
            'foodImg.required' => 'wajib masukan foto makanan'
        ]);
        Food::create($val);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Food::find($id);
        return view('admin.pages.editfood', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        $val = $request->validate([
            'nameFood' => 'required',
            'priceFood' => 'required',
            'categoriesFood' => 'required',
            'stockFood' => 'required',
            'foodImg' => 'required'
        ], [
            'nameFood.required' => 'makanan harus diisi',
            'priceFood.required' => 'harga harus diisi',
            'categoriesFood.required' => 'kategori makanan harus dipilih',
            'stockFood.required' => 'stok wajib diisi',
            'foodImg.required' => 'wajib masukan foto makanan'
        ]);
        $food->update($val);
        return redirect('/food');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return redirect('/food');
    }
}
