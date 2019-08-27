<?php

namespace App\Http\Controllers;
use App\Elu;
use Illuminate\Http\Request;

class EluController extends Controller
{

    public function index()
    {
        return response()->json(Elu::all());
    }

    public function show($id)
    {
      $elu =  Elu::find($id);
      if (empty($elu)) {

        return response()->json(['msg'=>'innexistante']);
      }
        return response()->json($elu);
    }

    public function create(Request $request)
    {
        $elu = Elu::create($request->all());

        return response()->json($elu, 201);
    }

    public function update($id, Request $request)
    {
        $elu = Elu::findOrFail($id);
        $elu->update($request->all());

        return response()->json($elu, 200);
    }

    public function delete($id)
    {
        Elu::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
