<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Product;

class Menu extends Model
{

    protected $fillable = [
        'name'
    ];

    public function validate(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
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
    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'menu_id');
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($products)
    {
        $this->pproducts = $products;
    }
}
