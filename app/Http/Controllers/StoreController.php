<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\SellerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function detailStore($sellerId)
    {
        $sellerRequest = SellerRequest::where('user_id', $sellerId)
            ->where('status', 'approved')
            ->first();

        if (!$sellerRequest) {
            abort(404, 'Toko tidak ditemukan atau belum di-approve');
        }
        $products = Product::where('seller_id', $sellerId)->get();

        return view('store-detail', [
            'store_name' => $sellerRequest->store_name,
            'products' => $products,
        ]);
    }

}


