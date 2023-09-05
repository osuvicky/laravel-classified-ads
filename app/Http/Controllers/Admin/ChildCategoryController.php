<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Childcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChildCategoryRequest;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $child_categories = ChildCategory::paginate(2);
        return view('admin.childcategories.index', compact('child_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.childcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChildCategoryRequest $request)
    {
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/childcategories');

            ChildCategory::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'sub_category_id' => $request->sub_category_id,
                'image' => $path
            ]);

            return redirect()->route('childcategories.index')->with('message', 'ChildCategory Created.');
        }
        return redirect()->route('childcategories.index')->with('message', 'ChildCategory Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $child_category = ChildCategory::find($id);
        return view('admin.childcategories.show', compact('child_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $child_category = ChildCategory::find($id);
        return view('admin.childcategories.edit', compact('child_category'));
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
        $child_category = ChildCategory::find($id);
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/childcategories');

            $child_category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'sub_category_id' => $request->sub_category_id,
                'image' => $path
            ]);

            return redirect()->route('childcategories.index')->with('message', 'ChildCategory Updated with Image.');
        }else{
            $child_category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'sub_category_id' => $request->sub_category_id,
            ]);
            return redirect()->route('childcategories.index')->with('message', 'ChildCategory Updated.');
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
        $child_category = ChildCategory::findOrFail($id);
        $child_category->delete();

        return redirect()->route('childcategories.index')->with('message', 'ChildCategory Deleted.');
    }
}
 