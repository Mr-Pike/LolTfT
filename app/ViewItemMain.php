<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewItemMain extends Model
{
    protected $table = '_itemsmainview';
    protected $primaryKey = 'id';

    public $timestamps = false;
    public $appends = [
        'champions'
    ];

    protected $fillable = ['name', 'description', 'image', 'tier_id', 'tier_name', 'cost_cost', 'item_id', 'item_name', 'item_image', 'item1_id', 'item1_name', 'item1_image', 'item2_id', 'item2_name', 'item2_image', 'champions'];

    public function getChampionsAttribute()
    {
        return json_decode($this->attributes['champions']);
    }
}
