<?php

namespace App\Http\Controllers;
use App\Region;
use Illuminate\Http\Request;

use App\Http\Resources\RegionResource;
class RegionController extends Controller
{

  public function index()
  {
    return response()->json(Region::all());
  }

  public function show($id)
  {

    $region =  Region::find($id);
    if (empty($region)) {

      return response()->json(['msg'=>'innexistante']);
    }
    return new RegionResource($region);
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'region_name' => 'required|string|unique:regions|max:100',
    ]);

    $input = $request->all();
    $input['region_name'] = mb_strtoupper($input['region_name']);
    $region = Region::create($input);

    return response()->json($region, 201);
  }

  public function update($id, Request $request)
  {
    $region = Region::findOrFail($id);
    $region->update($request->all());

    return response()->json($region, 200);
  }

  public function delete($id)
  {
    Region::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
  }
}
