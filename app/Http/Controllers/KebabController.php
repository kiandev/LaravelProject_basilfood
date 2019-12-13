<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use DB;

class KebabController extends Controller
{

    public function index()
    {
        $kebab = DB::table('foods')->where('type_four', 4)->get();
        return $kebab;
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
        $kebab = Food::find($id);
        return $kebab;
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
