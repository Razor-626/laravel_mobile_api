<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TechnicTypes;
use Illuminate\Http\Request;

class TechnicTypesController extends Controller
{
    public function index()
    {
        return TechnicTypes::all();
    }

    public function show($id)
    {
        return TechnicTypes::find($id);
    }

    public function store(Request $request)
    {
        $type = TechnicTypes::create($request->all());

        return response()->json($type, 201);
    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }
}
