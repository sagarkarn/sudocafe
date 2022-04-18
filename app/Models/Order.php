<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // $table->id();
    //         $table->unsignedInteger('total');
    //         $table->unsignedBigInteger('user_id');
    //         $table->unsignedBigInteger('address_id');
    //         $table->foreign('user_id')->references('id')->on('users');
    //         $table->foreign('address_id')->references('id')->on('addresses');
    //         $table->timestamps();

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($value)
    {
        $this->attributes['id'] = $value;
    }


    public function getTotal()
    {
        return $this->attributes['total'];
    }
    public function setTotal($value)
    {
        $this->attributes['total'] = $value;
    }


    public function getUserId()
    {
        return $this->attributes['user_id'];
    }
    public function setUserId($value)
    {
        $this->attributes['user_id'] = $value;
    }


    public function getAddressId()
    {
        return $this->attributes['address_id'];
    }
    public function setAddressId($value)
    {
        $this->attributes['address_id'] = $value;
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function getPayment()
    {
        return $this->attributes['payment_mode'];
    }
    public function setPayment($value)
    {
        $this->attributes['payment_mode'] = $value;
    }
}
