<?php

namespace BoxGrater\Ingredients\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
  public function recipe()
  {
    return $this->belongsTo('BoxGrater\Recipes\Models\Recipe');
  }

  public function ingredient()
  {
    return $this->hasOne('BoxGrater\Ingredients\Models\Ingredient', 'id','ingredient_id');
  }

  public function display()
  {
    $str = "{$this->qty} {$this->uom} {$this->description}";
    return $str;
  }
}
