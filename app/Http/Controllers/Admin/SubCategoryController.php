<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubCategoryRequest;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = SubCategory::paginate(2);
        return view('admin.subcategories.index', compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubCategoryRequest $request)
    {
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/subcategories');

            SubCategory::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'category_id' => $request->category_id,
                'image' => $path
            ]);

            return redirect()->route('subcategories.index')->with('message', 'SubCategory Created.');
        }
        return redirect()->route('subcategories.index')->with('message', 'SubCategory Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sub_category = SubCategory::find($id);
        return view('admin.subcategories.show', compact('sub_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub_category = SubCategory::find($id);
        return view('admin.subcategories.edit', compact('sub_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sub_category = SubCategory::find($id);
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/subcategories');

            $sub_category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'category_id' => $request->category_id,
                'image' => $path
            ]);

            return redirect()->route('subcategories.index')->with('message', 'SubCategory Updated with Image.');
        }else{
            $sub_category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'category_id' => $request->category_id,
            ]);
            return redirect()->route('subcategories.index')->with('message', 'SubCategory Updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_category = SubCategory::find($id);
        $sub_category->delete();

        return redirect()->route('subcategories.index')->with('message', 'SubCategory Deleted.');
    }
}
 