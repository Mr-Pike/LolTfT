<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewChampionMain extends Model
{
    protected $table = '_championsmainview';
    protected $primaryKey = 'id';

    public $timestamps = false;
    public $appends = [
        'origins', 'classes', 'items'
    ];

    protected $fillable = ['name', 'description', 'enabled', 'tier_id',	'cost_id', 'image', 'tier_name', 'cost_cost', 'origins', 'classes', 'items'];

    public function getOriginsAttribute()
    {
        return json_decode($this->attributes['origins']);
    }

    public function getClassesAttribute()
    {
        return json_decode($this->attributes['classes']);
    }

    public function getItemsAttribute()
    {
        return json_decode($this->attributes['items']);
    }
}
