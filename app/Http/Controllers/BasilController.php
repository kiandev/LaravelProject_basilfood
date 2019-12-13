<?php

namespace App\Http\Controllers;

use App\Basil;
use Illuminate\Http\Request;
use DB;

class BasilController extends Controller
{

    public function index()
    {
        $basil = DB::table('basils')->where('id', 1)->get();
        return $basil;
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
        //
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
