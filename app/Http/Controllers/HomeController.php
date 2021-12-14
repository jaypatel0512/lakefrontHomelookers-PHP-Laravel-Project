<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Properties;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::all();
        return view('admin.index')->with('home', $home);

//        $properties = Property::latest()->paginate(5);
//
//        return view('properties.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $property
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        return view('properties.show',compact('home'));
    }

}
