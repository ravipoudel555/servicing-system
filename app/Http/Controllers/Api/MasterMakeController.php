<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\CanLoadRelationships;
use App\Models\MasterMake;
use Illuminate\Http\Request;

class MasterMakeController extends Controller
{

    use CanLoadRelationships;
    /**
     * Display a listing of the resource.
     */

   private readonly  array $relations ;

   public function __construct(){
    $this->relations = ['models'];
   }
   
    public function index()
    {

      

        $query = $this->loadRelationships(MasterMake::query(), null);
        


        return response()->json($query->paginate());


        // $perPage = request()->get('per_page', 10);
        // $makes = MasterMake::paginate($perPage);

        // return response()->json($makes);
        
    }

    // protected function shouldIncludeRelation(string $relation):bool{
    //     $include =  request()->query('include');

    //     if(!$include) {
    //         return false;
    //     }

    //     $relations = array_map('trim',explode(',', $include));
  

    //     return in_array($relation, $relations);
    // }

   
}
