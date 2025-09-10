<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index()
    {
        // fetch all blogs from blog model with pagination
        $blogs = Blog::paginate(10); // 10 per page
        //dd($blogs);
        return view('blogs.list', compact('blogs'));
    }

    public function create()
    {
        // Fetch all categories to populate the dropdown in the create form
        $categories = Category::where('is_active', 1)->get();
        return view('blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required',
            'is_published' => 'required|boolean',
        ]);
        // Create a new category
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'is_published' => $request->is_published,
            'inserted_by' => auth()->id(),
        ]);
        //redirect to the category list with a success message
        return redirect()->route('blogs.index')->with('status', 'Blog created successfully.');


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
        $blog = Blog::findOrFail($id);
        // Fetch all categories to populate the dropdown in the create form
        $categories = Category::where('is_active', 1)->get();

        return view('blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required',
            'is_published' => 'required|boolean',
        ]);



        // Find the category
        $blog = Blog::findOrFail($id);

        // Update the category
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'is_published' => $request->is_published,
            'updated_by' => auth()->id(),
        ]);

        // Redirect to the category list with a success message
        return redirect()->route('blogs.index')->with('status', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete the category
        $blog = Blog::findOrFail($id);
        $blog->delete();

        // Redirect to the blog list with a success message
        return redirect()->route('blogs.index')->with('status', 'Blog deleted successfully.');
    }


    public function categoryBlogs($category_id, Request $request)
    {
        // Fetch blogs by category ID
        $blogs = Blog::where('category_id', $category_id)->paginate(10);

        // Fetch the category to display its name
        $category = Category::findOrFail($category_id);

        return view('categories_blog', compact('blogs', 'category'));
    }

    public function display($blog_id)
    {
        // Fetch the blog by ID
        $blog = Blog::findOrFail($blog_id);
        $blog_by_category = Category::withCount('blogs')->get(); // Get count of blogs per category

        // Return the view with the blog data
        // return view('blogs.display', compact('blog'));
        return view('blogs.display', compact('blog', 'blog_by_category'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $blogs = Blog::where('slug', 'like', '%' . $keyword . '%')
            ->orWhere('name', 'like', '%' . $keyword . '%')
            ->orWhere('content', 'like', '%' . $keyword . '%')
            ->get();
        $blog_by_category = Category::withCount('blogs')->get(); // Get count of blogs per category

        // Return the view with the blog data
        // return view('blogs.display', compact('blog'));
        return view('blogs.search', compact('blogs', 'blog_by_category'));
    }

}
