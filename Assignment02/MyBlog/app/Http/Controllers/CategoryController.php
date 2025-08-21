<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $b_category = Category::paginate(10); // correct
        return view('categories.list', compact('b_category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);
        // Create a new category
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'is_active' => $request->is_active,
            'inserted_by' => auth()->id(),
        ]);
        //redirect to the category list with a success message
        return redirect()->route('categories.index')->with('status', 'Category created successfully.');


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
        // Fetch the category by ID
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);

        // Find the category
        $category = Category::findOrFail($id);

        // Update the category
        $category->update([
            'name' => $request->name,
            'slug' => \Illuminate\Support\Str::slug($request->name),
            'is_active' => $request->is_active,
            'updated_by' => auth()->id(),
        ]);

        // Redirect to the category list with a success message
        return redirect()->route('categories.index')->with('status', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete the category
        $category = Category::findOrFail($id);
        $category->delete();

        // Redirect to the category list with a success message
        return redirect()->route('categories.index')->with('status', 'Category deleted successfully.');
    }
}
