<?php

namespace App\Http\Controllers;

use App\Models\business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = business::where('name', 'Hand-Brown')->get();
        dd($businesses);

        $business = Business::find();
        dd($business);
    }
}
