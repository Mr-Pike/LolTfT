<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $table = 'champions';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name', 'description', 'cost_id', 'tier_id', 'image', 'enabled'];

    public function cost()
    {
        return $this->hasOne(Cost::class, 'id', 'cost_id');
    }

    public function tiers()
    {
        return $this->hasOne(Tier::class, 'id', 'tier_id');
    }

    public function classes()
    {
        return $this->belongsToMany(Classs::class, 'champions_classes', 'champion_id', 'class_id');
    }

    public function origins()
    {
        return $this->belongsToMany(Origin::class, 'champions_origins');
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'champions_items');
    }
}
