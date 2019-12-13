<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use DB;

class PizzaController extends Controller
{

    public function index()
    {
        $pizza = DB::table('foods')->where('type_four', 2)->get();
        return $pizza;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $pizza = Food::find($id);
        return $pizza;
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
