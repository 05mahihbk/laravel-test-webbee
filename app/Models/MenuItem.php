<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	public function parent()
	{
		return $this->belongsTo(Self::class, 'id', 'parent_id');
	}

	public function childData()
	{

		return $this->hasMany(Self::class,'parent_id', 'id');
	}

	public function children()
	{
		return $this->childData()->with('children');
	}

}
