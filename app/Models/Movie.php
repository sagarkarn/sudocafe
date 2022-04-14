<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // use HasFactory;
    function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    function getRating()
    {
        return $this->attributes['rating'];
    }
    public function setRating($rating)
    {
        $this->attributes['rating'] = $rating;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}
