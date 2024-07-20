<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\admin\Product;
use App\Models\Car;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('cars')
        ->join('products', 'cars.id_product', '=', 'products.id')
        ->select('cars.*', 'products.name as product_name', 'products.price as product_price','products.img as product_img')
        ->get();
        // dd($data);
        return view('client.car', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id_user = Auth::id();
        $id_product=$request->id_product;
        $discount=$request->discount;
        $quantity=$request->quantity;
        // dd($request);
        Car::create([
            'id_user'=>$id_user,
            'id_product'=>$id_product,
            'discount'=>$discount,
            'quantity'=>$quantity,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
