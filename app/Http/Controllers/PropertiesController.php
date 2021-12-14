<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    function properties(){
        $properties = Properties::all();
        return view('admin.properties', $properties);
    }
}
