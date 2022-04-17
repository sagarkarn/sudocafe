<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($value)
    {
        $this->attributes['id'] = $value;
    }
    public function getHno()
    {
        return $this->attributes['hno'];
    }
    public function setHno($value)
    {
        $this->attributes['hno'] = $value;
    }
    public function getStreet()
    {
        return $this->attributes['street'];
    }
    public function setStreet($value)
    {
        $this->attributes['street'] = $value;
    }

    public function getZip()
    {
        return $this->attributes['zip'];
    }
    public function setZip($value)
    {
        $this->attributes['zip'] = $value;
    }
    public function getState()
    {
        return $this->attributes['state'];
    }
    public function setState($value)
    {
        $this->attributes['state'] = $value;
    }

    public function getCity()
    {
        return $this->attributes['city'];
    }
    public function setCity($value)
    {
        $this->attributes['city'] = $value;
    }

    public function getCountry()
    {
        return $this->attributes['country'];
    }
    public function setCountry($value)
    {
        $this->attributes['country'] = $value;
    }


    public function getUserId()
    {
        return $this->attributes['user_id'];
    }
    public function setUserId($value)
    {
        $this->attributes['user_id'] = $value;
    }

    public function getPhone()
    {
        return $this->attributes['phone'];
    }

    public function setPhone($value)
    {
        $this->attributes['phone'] = $value;
    }

    public function getIsDefault()
    {
        return $this->attributes['is_default'];
    }

    public function setIsDefault($value)
    {
        $this->attributes['is_default'] = $value;
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($value)
    {
        $this->user = $value;
    }
}
