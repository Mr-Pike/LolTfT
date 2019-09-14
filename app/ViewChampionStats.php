<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewChampionStats extends Model
{
    protected $table = '_championsstatsview';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name', 'description', 'cost_id', 'level', 'level_id', 'dps', 'attack_speed', 'damage', 'range', 'health', 'mana', 'armor', 'magic_resistance'];
}
