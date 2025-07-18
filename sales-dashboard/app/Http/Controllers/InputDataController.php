<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputData;

class InputDataController extends Controller
{
    public function index()
    {
        $data = InputData::orderBy('timestamp', 'desc')->get();
        return view('data_input.index', compact('data'));
    }
}
