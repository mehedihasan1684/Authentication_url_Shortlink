<?php

namespace App\Http\Controllers;
use App\Models\ShortLink;
use Illuminate\Http\Request;

class ShortController extends Controller
{
    public function index()
    {
        $datas = ShortLink::all();
        return view('short', compact('datas'));
    }

}
