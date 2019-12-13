<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\typeFour;

class TypeFourController extends Controller
{

    public function index()
    {
        $typeFour = typeFour::all();
        return $typeFour;
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $typeFour = new typeFour([
            'name' => $request ->get('name')
        ]);
        $typeFour->save();
    }


    public function show($id)
    {
        $typeFour = typeFour::find($id);
        return $typeFour;
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
