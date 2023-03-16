<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    //Get all dates
    public function index()
    {
            return Holiday::all();
    }

    //Get 1 date
    public function show(Holiday $holiday)
    {
        return $holiday;
    }



    /*
    public function store(Request $request)
    {
        //
    }

    
    public function show(Holiday $holiday)
    {
        //
    }

    
    public function update(Request $request, Holiday $holiday)
    {
        //
    }

    
    public function destroy(Holiday $holiday)
    {
        //
    }
    */
    
    
    
}
