<?php

namespace App\Http\Controllers;

use App\Mail\BuyMail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomepageController extends Controller
{
    public function homepage()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function detail(Product $product)
    {
        return view('detail', compact('product'));
    }

    public function sendemail(Request $request)
    {
        $data = [
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new BuyMail($data));

        return to_route('homepage');
    }
}
