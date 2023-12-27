<?php

namespace App\Http\Controllers\Web;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\CheckoutRequest;

class OrderController extends Controller
{
    public function checkout($id)
    {
        $cart = Cart::findOrFail($id)->first();
        $cart_items = CartItem::where('cart_id', $cart->id)->get();
        $products = [];
        foreach ($cart_items as $cart_item) {
            $products[] = Product::findOrFail($cart_item->product_id)->first();
        }
        return view('web.checkout', compact('products', 'cart_items', 'cart'));
    }

    public function store(CheckoutRequest $request)
    {
        $order = Order::create($request->validated());
        Cart::findOrFail($request->cart_id)->update([
            'status' => 'ordered',
        ]);
        $cart = Cart::findOrFail($request->id)->first();
        $cart_items = CartItem::where('cart_id', $cart->id)->get();
        foreach ($cart_items as $cart_item) {
            $product = Product::findOrFail($cart_item->product_id);
            $product->update([
                'quantity' => $product->quantity = $cart_item->quantity,
            ]);
        }
        return redirect()->route('order.order_success', $order->id);
    }

    public function orderSuccess(Order $order)
    {
        $cart = Cart::findOrFail($order->cart_id)->first();
        $cart_items = CartItem::where('cart_id', $cart->id)->get();
        $products = [];
        foreach ($cart_items as $cart_item) {
            $products[] = Product::findOrFail($cart_item->product_id)->first();
        }
        return view('web.recieve_order', compact('order', 'products', 'cart_items', 'cart'));
    }

    public function allOrders()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->where('status', 'ordered')->with('order')->get();
        return view('web.all_orders', compact('carts'));
    }
}
