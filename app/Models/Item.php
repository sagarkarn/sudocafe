<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //         $table->id();
    //         $table->unsignedInteger('quantity');
    //         $table->unsignedInteger('price');
    //         $table->unsignedBigInteger('product_id');
    //         $table->unsignedBigInteger('order_id');
    //         $table->foreign('product_id')->references('id')->on('products');
    //         $table->foreign('order_id')->references('id')->on('orders');
    //         $table->timestamps();

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($value)
    {
        $this->attributes['id'] = $value;
    }


    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }
    public function setQuantity($value)
    {
        $this->attributes['quantity'] = $value;
    }


    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($value)
    {
        $this->attributes['price'] = $value;
    }


    public function getProductId()
    {
        return $this->attributes['product_id'];
    }
    public function setProductId($value)
    {
        $this->attributes['product_id'] = $value;
    }


    public function getOrderId()
    {
        return $this->attributes['order_id'];
    }
    public function setOrderId($value)
    {
        $this->attributes['order_id'] = $value;
    }

    public function product()
    {
        return $this->belongsTo('product');
    }
    public function order()
    {
        return $this->belongsTo('order');
    }
}
