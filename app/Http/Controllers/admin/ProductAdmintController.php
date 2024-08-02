<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductAdmintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $productAdmin = AdminProduct::paginate(15);
        $productAdmin = DB::table('products')->latest('id')->paginate(10);
        // dd($productAdmin);
        return view('admin.products.index', compact('productAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = DB::table('categories')->get();
        return view('admin.products.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'string',
            'warranty_policy' => 'string',
            'discount' => 'integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);
        if ($request->hasFile('img')) {
            $img = Storage::put('imgs', $request->img);
        }
        $addPro = DB::table('products')->insert([
            'name' => $request->name,
            'img' => $img,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'warranty_policy' => $request->warranty_policy,
            'discount' => $request->discount,
            'category_id' => $request->category_id,
        ]);
        if ($addPro) {
            return redirect()->route('products-admin.index')->with('success', 'Thêm sản phẩm thành công');
        }
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
        $edit = DB::table('products')->where('id', $id)->first();
        $category = DB::table('categories')->get();
        return view('admin.products.edit', compact('edit', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = DB::table('products')->where('id', $id)->first();
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'string',
            'warranty_policy' => 'string',
            'discount' => 'integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);
        if ($request->hasFile('img')) {
            $img = Storage::put('imgs', $request->img);
        }else{
            $img = $edit->img;
        }
        $updatePro = DB::table('products')->where('id',$id)->update([
            'name' => $request->name,
            'img' => $img,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'warranty_policy' => $request->warranty_policy,
            'discount' => $request->discount,
            'category_id' => $request->category_id,
        ]);
        if ($updatePro) {
            return redirect()->route('products-admin.index')->with('success', 'Cap nhat sản phẩm thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del = DB::table('products')->where('id', $id)->delete();
        if ($del) {
            return redirect()->route('products-admin.index')->with('success', 'Xoa thanh cong');
        } else {
            return redirect()->route('products-admin.index')->with('error', 'Xoa that bai');
        }
    }
}
