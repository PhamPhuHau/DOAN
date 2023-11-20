<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    public function View()
    {
        $Size = Size::all();
        return view('SIZE/danh-sach',compact('Size'));
    }
}
