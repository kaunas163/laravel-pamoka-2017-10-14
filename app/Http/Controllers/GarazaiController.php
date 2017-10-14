<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Garazas;

class GarazaiController extends Controller
{
    public function index()
    {
        $garazai = Garazas::all();
//        return view('garazai.index', ['garazai' => $garazai]);
        return view('garazai.index', compact('garazai'));
    }

    public function show($id)
    {
        $garazas = Garazas::find($id);
        return view('garazai.show', compact('garazas'));
    }
}
