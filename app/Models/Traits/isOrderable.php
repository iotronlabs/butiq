<?php
namespace  App\Models\Traits;
use Illuminate\Database\Eloquent\Builder;



trait isOrderable
{
	public function ScopeOrdered(Builder $builder,  $direction = 'asc')
	{
		$builder->orderBy('order',$direction);
	}

}