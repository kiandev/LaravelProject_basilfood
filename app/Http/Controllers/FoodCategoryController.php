<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use DB;

class FoodCategoryController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->input('type');
        $id = $request->input('id');
        $food = DB::table('foods')->where($type, $id)->get();
        return $food;
    }
}
