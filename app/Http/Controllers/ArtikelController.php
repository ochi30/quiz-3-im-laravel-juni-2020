<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function create()
    {
        return view('artikel.form');
    }
    public function index()
    {
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        unset($data["submit"]);
        ArtikelModel::save($data);
        return redirect('/artikel');
    }
    public function show($id)
    {
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.detail', compact('artikel'));
    }
    public function edit($id)
    {
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikel'));
    }
    public function update(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        ArtikelModel::editing($data);
        return redirect('/artikel');
    }
}
