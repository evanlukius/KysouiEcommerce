<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all(); // Fetch all products
        $categories = Category::all(); // Fetch all categories
        return view('index', compact('categories', 'products'));
    }
    


    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
