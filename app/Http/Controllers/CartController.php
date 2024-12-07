<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        // Middleware auth untuk memastikan hanya user yang login dapat mengakses
        $this->middleware('auth');
    }

    public function addToCart($productId)
    {
        // Cek apakah produk ada
        $product = Product::find($productId);

        if ($product) {
            // Periksa apakah produk sudah ada di keranjang
            $cart = Cart::where('product_id', $productId)
                ->where('user_id', Auth::id())
                ->first();

            if ($cart) {
                // Jika produk sudah ada, update quantity
                $cart->quantity += 1;
                $cart->save();
            } else {
                // Jika produk belum ada, tambahkan produk ke keranjang
                Cart::create([
                    'product_id' => $productId,
                    'quantity' => 1,
                    'user_id' => Auth::id(),
                ]);
            }
        }

        return redirect()->route('cart.show');
    }

    public function showCart()
    {
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();

        $originalPrice = $carts->sum(function ($cart) {
            return $cart->product->harga * $cart->quantity;
        });

        $discount = $originalPrice * 0.1;
        $tax = ($originalPrice - $discount) * 0.11;
        $shippingCost = 1000;

        $totalPrice = ($originalPrice - $discount) + $shippingCost + $tax;

        return view('cart.shopping', compact('carts', 'originalPrice', 'discount', 'shippingCost', 'tax', 'totalPrice'));
    }

    public function update(Request $request, $cartId)
    {
        $cart = Cart::findOrFail($cartId);
        $cart->quantity = $request->input('quantity');
        $cart->save();

        return redirect()->route('cart.show')->with('success', 'Cart updated');
    }

    public function delete($cartId)
    {
        $cart = Cart::findOrFail($cartId);
        $cart->delete();

        return redirect()->route('cart.show')->with('success', 'Item removed from cart');
    }
}
