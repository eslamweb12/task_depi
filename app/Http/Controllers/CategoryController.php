<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public  function create(CategoryRequest $request){
        $data=$request->validated();
        category::query()->create($data);
        return redirect()->back()->with('message','category created successfully');

    }

}
