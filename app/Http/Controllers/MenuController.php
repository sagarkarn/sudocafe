<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $user =  Auth::user();
        $cart = null;
        if ($user) {
            $cart = $user->getCarts()->pluck('product_id')->toArray();
        }

        return view('menu.index')
            ->with('menus', Menu::all())
            ->with('carts', $cart);
    }

    public function edit($id)
    {
    }
}
