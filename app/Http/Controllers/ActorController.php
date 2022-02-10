<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Utils\FormSelect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    public function __construct(public Actor $model)
    {        
    }

    public function index(Request $request) {
        $filter = $request->get('query');        
        return $this->model
            ->orderBy('first_name')
            ->orderBy('last_name')
            ->select('actor_id as value', DB::raw("concat(first_name, ' ', last_name) as label"))
            ->when($filter, function($query, $filter){
                return $query
                    ->where('first_name', 'LIKE', "%{$filter}%")
                    ->orWhere('last_name', 'LIKE', "%{$filter}%");
            })
            ->get();            
    }
}
