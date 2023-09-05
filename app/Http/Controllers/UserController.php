<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class UserController extends Controller
{
    public function index()
    {
        $listings = Listing::where('user_id', auth()->user()->id)->paginate(10);

        return view('dashboard', compact('listings'));
    }
}
