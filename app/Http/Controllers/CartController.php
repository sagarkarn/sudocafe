<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        // cartitems
        $items = $user->getCarts();
        $default_address = Address::where('user_id', $user->getId())->where('is_default', true)->first();
        return view('cart.index')->with('items', $items)->with('default_address', $default_address);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Cart::valiate($request);
        $response = array();

        $productId = $request->json('product_id');
        if (!$productId) {
            $productId = $request->input('product_id');
        }

        $product = Product::find($productId);
        $quantity = $request->json('quantity');

        if (!$quantity) {
            $quantity = $request->input('quantity');
        }

        $availableCart = Cart::where('product_id', $productId)->first();

        if ($availableCart) {
            $response['success'] = false;
            $response['message'] = "Already Added in cart";
            return json_encode($response);
        }

        $cart  = new Cart();
        $cart->setProduct($product);
        $cart->setQuantity($quantity);
        $cart->setUser(Auth::user());
        $cart->save();

        $response['success'] = true;
        return json_encode($response);
    }


    public function show(Cart $cart)
    {
        //
    }


    public function edit(Cart $cart)
    {
        //
    }


    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }


    public function destroy($id)
    {
        Cart::destroy($id);
        $res = array();

        $res['response'] = "success";

        return json_encode($res);
    }

    public function create_order(Request $request)
    {
        $items = $request->json('items');
        $item_array = [];

        $orderId = date("ymdHis");

        $order = new Order();
        $total = 0;

        foreach ($items as $value) {

            $item = new Item();
            $item->setQuantity(intval($value['quantity']));
            $item->setProductId($value['product_id']);
            $product = Product::find($value['product_id']);

            $price = $product->getRate();
            $item->setPrice($price);
            array_push($item_array, $item);
            $total += $value['quantity'] * $price;
        }

        $order->setTotal($total);

        $order->setAddressId($request->json('address_id'));
        $order->setUserId(Auth::user()->getId());
        $order->setPayment($request->json('payment_mode'));
        $order->save();

        for ($i = 0; $i < sizeof($item_array); $i++) {
            $item_array[$i]->setOrderId($order->getId());
            $item_array[$i]->save();
        }

        foreach (Auth::user()->carts as $cart) {
            $cart->delete();
        }
        $response['success'] = true;
        $response['id'] = $order->getId();
        return json_encode($response);
    }
    public function success($id)
    {
        return view('cart.success')->with('order', Order::find($id));
    }
}
