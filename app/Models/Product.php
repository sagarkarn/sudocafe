<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    protected $fillable = [
        'title',
        'rate',
        'description',
        'image_url',
        'menu_id'
    ];

    public static function validate(Request $request)
    {
        $request->validate([
            "title" => "required|max:255",
            "rate" => "required|numeric|gt:0",
            "description" => "required|max:255",
            "menu_id" => "required|exists:menus,id"
            // "image_url" => "image",
        ]);
    }

    public function getMenuId()
    {
        return $this->attributes['menu_id'];
    }

    public function setMenuId($id)
    {
        $this->attributes['menu_id'] = $id;
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getTitle()
    {
        return $this->attributes['title'];
    }

    public function setTitle($name)
    {
        $this->attributes['title'] = $name;
    }

    public function getRate()
    {
        return $this->attributes['rate'];
    }
    public function setRate($rate)
    {
        $this->attributes['rate'] = $rate;
    }

    public function getDescription()
    {
        return $this->attributes['description'];
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

    public function getImageUrl()
    {
        return $this->attributes['image_url'];
    }

    public function setImageUrl($imageUrl)
    {
        $this->attributes['image_url'] = $imageUrl;
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function getMenu()
    {
        return $this->menu;
    }

    public function setMenu($menu)
    {
        $this->menu = $menu;
    }
}
