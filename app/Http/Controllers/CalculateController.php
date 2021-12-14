<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Calculate;
use App\Models\Area;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CalculateController extends Controller
{
    function calculate(){
        $Calculate = Calculate::all();
        return view('calculate', $Calculate);
    }

    function index(Request $request){
        $areas = Area::all();
        $houses = House::all();
        // echo '<pre>';print_r($areas);exit;

        $pricelist = [];
        $pricelist['aprox_value'] = 0;
        $pricelist['house_rate'] = request('house_rate')?request('house_rate'):0;
        $pricelist['area_rate'] = request('area_rate')?request('area_rate'):0;
        $pricelist['property_Tax'] = request('property_Tax')?request('property_Tax'):0;

        $pricelist['aprox_value'] = $pricelist['house_rate'] + $pricelist['area_rate'] +  $pricelist['property_Tax'];


        return view('admin/calculate', ["areas"=>$areas,'houses'=>$houses,'price_list'=>$pricelist]);
    }
}
