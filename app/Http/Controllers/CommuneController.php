<?php

namespace App\Http\Controllers;
use App\Commune;
use Illuminate\Http\Request;

use App\Http\Resources\CommuneResource;
class CommuneController extends Controller
{

    public function index()
    {
        return response()->json(Commune::all());
    }

    public function show($id)
    {
      $commune =  Commune::find($id);
      if (empty($commune)) {

        return response()->json(['msg'=>'innexistante']);
      }
      return new CommuneResource($commune);
    }

    public function create(Request $request)
    {
        $commune = Commune::create($request->all());

        return response()->json($commune, 201);
    }

    public function update($id, Request $request)
    {
        $commune = Commune::findOrFail($id);
        $commune->update($request->all());

        return response()->json($commune, 200);
    }

    public function delete($id)
    {
        Commune::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
