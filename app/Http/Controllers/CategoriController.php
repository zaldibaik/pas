<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriController extends Controller
{
    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'decripsi' => 'required',
        ]);

        DB::table('category')->insert([
            'nama' => $request ['nama'],
            'decripsi' =>$request ['decripsi']
        ]);

       return redirect()->route('kategori')->with('success', 'Category created successfully.');
    }
}
