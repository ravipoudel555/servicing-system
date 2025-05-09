<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Mechanic::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     [
        //         'name' => 'required|string|max:255',
        //         'email' => 'required|email|unique:mechanics',
        //         'phone' => 'required|string|digits:10|unique:mechanics',
        //         'address' => 'required',

        //     ]
        // );
        $mechanic = Mechanic::create([
            ...$request->validate(
                [
                    'name' => 'required|string|max:255',
                    'phone' => 'required|string|digits:10|unique:mechanics',
                    'address' => 'required',

                ]
            ),
            'user_id' => 1
        ]);

        return $mechanic;
    }

    /**
     * Display the specified resource.
     */
    public function show(Mechanic $mechanic)
    {
        return $mechanic;
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
