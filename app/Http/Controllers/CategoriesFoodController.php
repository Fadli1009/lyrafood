<?php

namespace App\Http\Controllers;

use App\Models\CategoriesFood;
use Illuminate\Http\Request;

class CategoriesFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CategoriesFood::all();
        return view('admin.pages.allcategories', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoriesFood $categoriesFood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriesFood $categoriesFood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoriesFood $categoriesFood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriesFood $categoriesFood)
    {
        //
    }
}
