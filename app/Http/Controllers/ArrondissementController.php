<?php

namespace App\Http\Controllers;
use App\Arrondissement;
use Illuminate\Http\Request;

use App\Http\Resources\ArrondissementResource;
class ArrondissementController extends Controller
{

    public function index()
    {
        return response()->json(Arrondissement::all());
    }

    public function show($id)
    {
      $arrondissement =  Arrondissement::find($id);
      if (empty($arrondissement)) {

        return response()->json(['msg'=>'innexistante']);
      }
      return new ArrondissementResource($arrondissement);
    }

    public function create(Request $request)
    {
        $arrondissement = Arrondissement::create($request->all());

        return response()->json($arrondissement, 201);
    }

    public function update($id, Request $request)
    {
        $arrondissement = Arrondissement::findOrFail($id);
        $arrondissement->update($request->all());

        return response()->json($arrondissement, 200);
    }

    public function delete($id)
    {
        Arrondissement::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
