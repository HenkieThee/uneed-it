<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebshopController extends Controller
{
    public function index()
    {
        // FHoeveel items op 1 pagina
        $products = Product::paginate(25);

        return view('webshop', compact('products'));
    }
}