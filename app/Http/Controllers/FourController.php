<?php

namespace App\Http\Controllers;

use App\Basil;
use Illuminate\Http\Request;
use DB;

class FourController extends Controller
{

    public function index()
    {

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
        $food = DB::table('foods')->where('type_four', $id)->get();
        return $food;
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
