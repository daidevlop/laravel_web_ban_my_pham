<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oder = DB::table('cars')
            ->join('products', 'cars.id_product', '=', 'products.id')
            ->join('users', 'cars.id_user', '=', 'users.id')
            ->select('cars.*', 'products.name as product_name', 'users.name as user_name')
            ->get();
        // dd($oder);
        return view('admin.donhang.index', compact('oder'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }
    public function edit(string $id)
    {
        $edit = DB::table('cars')
            ->join('products', 'cars.id_product', '=', 'products.id')
            ->join('users', 'cars.id_user', '=', 'users.id')
            ->select('cars.*', 'products.name as product_name', 'users.name as user_name')
            ->where('cars.id', $id)->first();
        // $edit = DB::table('cars')->where('id', $id)->first();
        // dd($edit);
        return view('admin.donhang.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $update = DB::table('cars')->where('id', $id)->first();
        $request->validate([
            'status' => ['required', 'string'],
        ]);
        DB::table('cars')->where('id', $id)->update([
            'status' => $request->status,
        ]);
        return redirect()->route('oder.index')->with('success', 'Update thành công');
    }
    public function destroy(string $id)
    {
    }
}
