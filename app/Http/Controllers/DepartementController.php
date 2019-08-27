<?php

namespace App\Http\Controllers;
use App\Departement;
use Illuminate\Http\Request;
use App\Http\Resources\DepartementResource;
class DepartementController extends Controller
{

    public function index()
    {
        return response()->json(Departement::all());
    }

    public function show($id)
    {
      $departement =  Departement::find($id);
      if (empty($departement)) {

        return response()->json(['msg'=>'innexistante']);
      }
      return new DepartementResource($departement);
    }

    public function create(Request $request)
    {
        $departement = Departement::create($request->all());

        return response()->json($departement, 201);
    }

    public function update($id, Request $request)
    {
        $departement = Departement::findOrFail($id);
        $departement->update($request->all());

        return response()->json($departement, 200);
    }

    public function delete($id)
    {
        Departement::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
