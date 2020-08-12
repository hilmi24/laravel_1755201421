<?php

namespace App\Http\Controllers;

use App\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    
    public function index()
    {
        $list_prodi = Prodi::all();
        return view('prodi.index', compact('list_prodi'));
        
    }
}
