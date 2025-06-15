<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MasterMake;
use Illuminate\Http\Request;

class MasterMakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $makes = MasterMake::all();

        return response()->json($makes);


        // $perPage = request()->get('per_page', 10);
        // $makes = MasterMake::paginate($perPage);

        // return response()->json($makes);
        
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
    public function show(MasterMake $make)
    {
        return response()->json($make);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
