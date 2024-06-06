<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        return Quote::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
            'author' => 'required|string',
        ]);

        return Quote::create($request->all());
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();

        return response()->json(['message' => 'Quote deleted']);
    }
}