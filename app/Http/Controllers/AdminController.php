<?php

namespace App\Http\Controllers;

use App\Models\CategoriesFood;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $food = Food::count();
        $harga = DB::table('food')->sum('priceFood');
        $category = CategoriesFood::count();
        $foodtbl = Food::paginate(4);
        $data = Food::all();
        return view('admin.pages.index', compact(['food', 'category', 'foodtbl', 'data', 'harga']));
    }
}
