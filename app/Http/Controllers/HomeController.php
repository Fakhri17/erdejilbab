<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::query()
            ->where('is_published', true)
            ->where('is_best_seller', true)
            ->latest()
            ->take(3)
            ->get();
        $siteSetting = SiteSetting::first();
        return view('index', compact('products', 'siteSetting'));
    }
}
