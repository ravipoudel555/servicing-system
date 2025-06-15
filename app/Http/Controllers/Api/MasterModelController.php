<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MasterMake;
use App\Models\MasterModel;
use Illuminate\Http\Request;

class MasterModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MasterMake $make)
    {

        $perPage = request()->get('per_page', 10);
        $models = $make->models()->paginate($perPage);
        return response()->json($models);

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterMake $make, MasterModel $model)
    {
        return response()->json($model);
    }

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
