<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index()
    {
        $data = Products::all();

        return view('index', compact(['data']));
    }
    public function create()
    {
        return view('createdata');
    }
    public function simpan(Request $request)
    {
        Products::create($request->except(['_token']));
        return redirect('/');
    }
    public function edit($id)
    {
        $data = Products::find($id);

        return view('editdata', compact(['data']));
    }
    public function destroy($id)
    {
        $data = Products::find($id);
        $data->delete();
        return redirect('/');
    }
    public function update($id, Request $request)
    {
        $data = Products::find($id);
        $data->update($request->except(['_token']));
        return redirect('/');
    }
}
