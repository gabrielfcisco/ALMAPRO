<?php

namespace App\Http\Controllers;

use App\Models\business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $business = Business::find(2);
        $input = [
            'name' => 'John Smith',
            'email' => 'john@example.com'
        ];
        $business->fill($input);
        $business->save();
        dd($business);
    }
}
