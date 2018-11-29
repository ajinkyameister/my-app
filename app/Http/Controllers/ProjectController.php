<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{

    public function create(){
    	
    	return view('form')	;
    	
    }

    public function store(Request $request, Project $project){

     $this->validate(request(),[

        'name' => 'required',
        
        'description' => 'required',
    ]);



    Project::create([

      'name'=> $request->name,

      'description' => $request->description

    ]);

 }

  public function storeReseller(Request $request, Reseller $reseller){
            
            
        }		
}
