<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\DetailSellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function detailStore($sellerId)
    {
        $DetailSeller = DetailSeller::where('user_id', $sellerId)
            ->where('status', 'approved')
            ->first();

        if (!$DetailSeller) {
            abort(404, 'Toko tidak ditemukan atau belum di-approve');
        }
        $products = Product::where('seller_id', $sellerId)->get();

        return view('store-detail', [
            'store_name' => $DetailSeller->store_name,
            'products' => $products,
        ]);
    }

}


