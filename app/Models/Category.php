<?php

namespace App\Models;
use App\Models\Traits\HasChildren;
use App\Models\Traits\isOrderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{	
		
	use HasChildren;
	use isOrderable;

	protected $fillable = [
		'name' ,
		'slug',
		'order'
	];
	public function ScopeParents(Builder $builder)
	{
		$builder->whereNull('parent_id');
	}

	public function ScopeOrdered(Builder $builder,  $direction = 'asc')
	{
		$builder->orderBy('order',$direction);
	}



    public function children()
    {
    	return $this->hasMany(Category::class,'parent_id','id');
    }

}
