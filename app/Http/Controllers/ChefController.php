<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chef.index');
    }
    Public function getChefs()
    {
        $chefs = Chef::all();
        return Datatables::of($chefs)
        ->addIndexColumn()
        ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chef.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chef = new Chef;
        $chef->name = $request->name;
        $chef->speciality = $request->speciality;
        // Image code for uploading
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $img = Image::make($file->getRealPath())->resize(1920,2560);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            // $file->move('Images/',$filename);
            $img->save(public_path('Images/'.$filename));
            $chef->image = $filename;
        }
        $chef->save();
        return redirect()->route('chefs.index')->with('message','New chef created Successfully');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chefs = Chef::find($id);
        Log::info($chefs);
        return view('chef.edit',compact('chefs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chef = Chef::find($id);
        $chef->name = $request->name;
        $chef->speciality = $request->speciality;
        // Image code for uploading
        if($request->hasFile('image'))
        {
            $destination = 'Images/'.$chef->image;
            if(File::exists($destination))
            {
              File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('Images/',$filename);
            $chef->image = $filename;
        }
        $chef->update();
        return redirect()->route('chefs.index')->with('message','Update chef Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
       $chef = Chef::find($req->chef_id);
       $destination = 'Images/'.$chef->image;
       if(File::exists($destination))
       {
           File::delete($destination);
       }
       $chef->delete();
       return redirect()->route('chefs.index')->with('message','Chef Delete Successfuly');
    }
}
