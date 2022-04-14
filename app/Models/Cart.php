<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cart extends Model
{



    static public function valiate(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|numeric|gt:0',
        ]);
    }
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function setProduct($product)
    {
        $this->attributes['product_id'] = $product->getId();
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function getUser()
    {
        return $this->user();
    }

    public function setUser($user)
    {
        $this->attributes['user_id'] = $user->getId();
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }
    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }
}
