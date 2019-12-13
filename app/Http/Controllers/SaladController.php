<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use DB;

class SaladController extends Controller
{

    public function index()
    {
        $salad = DB::table('foods')->where('type_four', 1)->get();
        return $salad;
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
        $salad = Food::find($id);
        return $salad;
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
