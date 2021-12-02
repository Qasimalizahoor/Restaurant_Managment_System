<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        return view('food.index',compact('foods'));
    }

    public function getFoods()
    {
        $foods = Food::all();
        return Datatables::of($foods)
        ->addIndexColumn()
        ->make(true);
        
    }


    public function create()
    {
        return view('food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
        $req->validate([
            'image'=>'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        $food = new Food;
        $image = $req->file('image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $req->image->move('Images',$image_name);
        $food->image = $image_name;
        $food->title = $req->title; 
        $food->description = $req->description;
        $food->price = $req->price;
        $food->save();
        return redirect()->route('foods.index')->with('message','Food successfuly added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);
        return view('food.edit',compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food = Food::find($id);
        $food->title = $request->title;
        $food->description = $request->description;
        $food->price = $request->price;
        if($request->hasfile('image'))
        {
            $destination = 'Images/'.$food->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('Images/',$filename);
            $food->image = $filename;

        }
        $food->update();
        return redirect()->route('foods.index')->with('message','Food updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req,$id)
    {
        
        $food = Food::find($req->food_id);
        $destination = 'Images/'.$food->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $food->delete();
        return redirect()->back()->with('message','Data Delete successfuly');
    }
}
