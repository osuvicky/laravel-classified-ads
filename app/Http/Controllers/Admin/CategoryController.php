<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(2);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/categories');

            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $path
            ]);

            return redirect()->route('categories.index')->with('message', 'Category Created.');
        }
        return redirect()->route('categories.index')->with('message', 'Category Created.');
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/categories');

            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $path
            ]);

            return redirect()->route('categories.index')->with('message', 'Category Updated with Image.');
        }else{
            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name)
            ]);
            return redirect()->route('categories.index')->with('message', 'Category Updated.');
        }

    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('message', 'Category Deleted.');

    }
}
