<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\CanLoadRelationships;
use App\Models\MasterMake;
use App\Models\MasterModel;
use Illuminate\Http\Request;

class MasterModelController extends Controller
{

    use CanLoadRelationships;

    private readonly array $relations ;
   
     public function __construct(){
        $this->relations= ['make'];
     }

      /**
     * Display a listing of the resource.
     */


    public function index(MasterMake $make)
    {
        $perPage = request()->get('per_page', 10);
        
        // Get the base query
        $models = $make->models();
        
        // Use the trait to load relationships
        $models = $this->loadRelationships(for: $models);
        
        // Execute the query with pagination
        return response()->json($models->paginate($perPage));
    }


   
}
