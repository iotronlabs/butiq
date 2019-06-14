<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scoping\Scoper;
use App\Models\Category;
use App\Models\ProductVariation;
use App\Models\Traits\CanBeScoped;
use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;
use NumberFormatter;
class Product extends Model
{

  use CanBeScoped;

   public function getRouteKeyName()
   {

   		return 'slug';
   }

   


   public function categories()
   {

    return $this->belongsToMany(Category::class);

   }
   public function variations()
    {
        return $this->hasMany(ProductVariation::class)->orderBy('order', 'asc');
    }
}
 