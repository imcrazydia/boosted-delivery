<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['title', 'image', 'description', 'calories', 'carbs', 'sodium', 'sugars'];
}
