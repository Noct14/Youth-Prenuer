<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'options' => 'array',
            'options.*' => 'exists:options,id',
            'quantity' => 'integer|min:1',
        ]);

        $user = auth()->user();
        // $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $cart = Cart::firstOrCreate(['user_id' => 1]);// dummy id

        $cartItem = $cart->items()->create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity ?? 1,
        ]);

        if ($request->filled('options')) {
            $cartItem->options()->attach($request->options);
        }

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function viewCart ()
    {
        $cart = Cart::with(['items.product', 'items.options'])->where('user_id', 1)->first();

        return view('cart', compact('cart'));
    }

    public function remove(CartItem $item)
    {
        $item->delete();
        return back()->with('success', 'Item berhasil dihapus dari keranjang');
    }



}
