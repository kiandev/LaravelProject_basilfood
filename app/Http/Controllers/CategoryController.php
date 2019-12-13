<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{

    public function index()
    {
        //
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
        if ($id == 1){
            $category = DB::table('type_ones')->get();
            return $category;
        } else if ($id == 2){
            $category = DB::table('type_twos')->get();
            return $category;
        } else if ($id == 3){
            $category = DB::table('type_threes')->get();
            return $category;
        } else if ($id == 4){
            $category = DB::table('type_fours')->get();
            return $category;
        }
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
