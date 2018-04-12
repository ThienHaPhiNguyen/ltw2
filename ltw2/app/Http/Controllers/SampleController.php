<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Models\Student;
use App\Http\Models\Sample;

class SampleController extends Controller {

    public function index() {
        $obj = new Sample();
        $datamenu = $obj::all();
        //
        $parents = $obj->getParents();
        $childs = $obj->getChilds($parents);
       //
        $obj = new Student();
        $data = $obj::all();
        
        





        return view('main', ['datamenu' => $datamenu, 'data' => $data, 'childs' => $childs]);
    }

}
