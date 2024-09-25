<?php

namespace App\Http\Controllers;

use App\Http\Requests\questinRequest;
use App\Models\category;
use App\Models\question;
use Illuminate\Http\Request;

class questionController extends Controller
{
    public function create(){
        $data=category::query()->get();
        return view('createCategoryAndAdmin.addqustation',compact('data'));


    }

    public function store(questinRequest $request){
        $data=$request->validated();
        question::query()->create($data);
        return redirect()->back()->with('success','question created successfully');


    }
}
