<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChampionItem extends Model
{
    protected $table = 'champions_items';
    protected $primaryKey = 'id';
    protected $fillable = ['champion_id', 'item_id', 'order_number', 'recommended'];

    public $timestamps = false;

    public function champions()
    {
        return $this->belongsToMany(Champion::class, 'id', 'champion_id');
    }
}
