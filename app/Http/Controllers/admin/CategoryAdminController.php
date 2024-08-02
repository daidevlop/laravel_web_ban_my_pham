<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{
    public function index()
    {
        $category = Category::paginate(4);
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_category' => ['required', 'string', 'max:255'],
        ]);
        Category::create($request->all());
        return redirect()->route('category-admin.index')->with('success', 'Category created successfully.');
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
        $edit = Category::where('id', $id)->first();
        return view('admin.category.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_category' => ['required', 'string', 'max:255'],
        ]);
        $category = Category::findOrFail($id);
        $category->update([
            'name_category' => $request->input('name_category'),
        ]);
        return redirect()->route('category-admin.index')->with('success', 'Category updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('category-admin.index')->with('success', 'Category deleted successfully.');
    }
}
