<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebshopController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        if ($request->has('search') && $request->search != '') {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('price', 'like', '%' . $request->search . '%');
            });
        }

        $products = $query->paginate(25);

        return view('webshop', compact('products'));
    }
}