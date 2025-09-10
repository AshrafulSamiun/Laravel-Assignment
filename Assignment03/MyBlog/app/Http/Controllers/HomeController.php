<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // get all blogs and categories and sum of blogs per category
        // This can be done by fetching the data from the Blog and Category models
        // and passing it to the view.  
        $blogs = Blog::with('category')->where('is_published', 1)->paginate(10); // Fetch published blogs with pagination
        $categories = Category::where('is_active', 1)->get(); // Fetch active categories    
        $blog_by_category = Category::withCount('blogs')->get(); // Get count of blogs per category

        return view('home', compact('blogs', 'categories', 'blog_by_category'));

        // Logic for displaying the home page can be added here 
        //return view('home');
    }
}
