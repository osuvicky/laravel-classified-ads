<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::paginate(100);
        return view('admin.countries.index', compact('countries'));
    }

    public function create()
    {
        return view('admin.countries.create');
    }

    public function store(StoreCountryRequest $request)
    {
        Country::create($request->validated());

        return redirect()->route('countries.index')->with('message', 'Country Created.');
    }


    public function edit(Country $country)
    {
        return view('admin.countries.edit', compact('country'));
    }

    public function update(StoreCountryRequest $request, Country $country)
    {
        $country->update($request->validated());

        return redirect()->route('countries.index')->with('message', 'Country Created.');
    }

    public function show(Country $country)
    {
        return view('admin.countries.show', compact('country'));
    }

    public function destroy(Country $country)
    {
        $country->delete();

        return redirect()->route('countries.index')->with('message', 'Country Deleted.');

    }
}