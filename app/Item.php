<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = ['name', 'description', 'image', 'item1_id', 'item2_id', 'enabled'];

    public function item1()
    {
        return $this->belongsTo(Item::class, 'item1_id', 'id');
    }

    public function item2()
    {
        return $this->belongsTo(Item::class, 'item2_id', 'id');
    }

    public function champions() 
    {
        return $this->belongsToMany(Champion::class, 'id', 'champion_id');
    }
}
