<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Carbon\Carbon; // Ensure Carbon is used.

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function brands()
    {
        $brands = Brand::orderBy('id','DESC')->paginate(10);
        return view("admin.brands",compact('brands'));
    }

    public function categories()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(10);
        return view("admin.categories", compact('categories'));
    }

    public function add_category()
    {
        return view("admin.category-add");
    }

    public function category_store(Request $request)
    {        
        $request->validate([
            'name'  => 'required|string|max:255',
            'slug'  => 'required|unique:categories,slug|string|max:255',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_extention = $image->extension();
            $file_name = Carbon::now()->timestamp . '.' . $file_extention;

            // Generate thumbnail image
            $this->GenerateCategoryThumbnailImage($image, $file_name);

            $category->image = $file_name;
        }

        $category->save();

        return redirect()->route('admin.categories')->with('status', 'Record has been added successfully!');
    }

    public function GenerateCategoryThumbnailImage($image, $file_name)
    {
        $destinationPath = public_path('uploads/categories');

        // Ensure the directory exists
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $img = Image::make($image->path());
        $img->fit(124, 124); // Fit image to 124x124 without distortion
        $img->save($destinationPath . '/' . $file_name);
    }
}
