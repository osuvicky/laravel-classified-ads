<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StoreStateRequest;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::paginate(100);
        return view('admin.states.index', compact('states'));
    }

    public function create()
    {
        return view('admin.states.create');
    }

    public function store(StoreStateRequest $request)
    {
        State::create($request->validated());

        return redirect()->route('states.index')->with('message', 'State Created.');
    }


    public function edit(State $state)
    {
        return view('admin.states.edit', compact('state'));
    }

    public function update(StoreStateRequest $request, State $state)
    {
        $state->update($request->validated());

        return redirect()->route('states.index')->with('message', 'State Updated.');
    }

    public function show(State $state)
    {
        return view('admin.states.show', compact('state'));
    }

    public function destroy(State $state)
    {
        $state->delete();

        return redirect()->route('states.index')->with('message', 'State Deleted.');

    }
}