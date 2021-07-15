<?php

namespace App\Http\Controllers;
use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function sendRequirement(Request $request){

        Requirement::create([
            'header'=>$request->header,
            'description'=>$request->description,
            'user_id'=>$request->user_id,
            'image'=>$request->image,
        ]);

        return back()->with('success','Data sent succefuuly!');
    }

}
