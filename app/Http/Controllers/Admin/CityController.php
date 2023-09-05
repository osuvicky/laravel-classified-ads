<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCityRequest;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::paginate(100);
        return view('admin.cities.index', compact('cities'));
    }

    public function create()
    {
        return view('admin.cities.create');
    }

    public function store(StoreCityRequest $request)
    {
        City::create($request->validated());

        return redirect()->route('cities.index')->with('message', 'City Created.');
    }


    public function edit(City $city)
    {
        return view('admin.cities.edit', compact('city'));
    }

    public function update(StoreCityRequest $request, City $city)
    {
        $city->update($request->validated());

        return redirect()->route('cities.index')->with('message', 'CIty Updated.');
    }

    public function show(City $city)
    {
        return view('admin.cities.show', compact('city'));
    }

    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index')->with('message', 'City Deleted.');

    }
}