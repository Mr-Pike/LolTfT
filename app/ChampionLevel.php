<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChampionLevel extends Model
{
    protected $table = 'champions_levels';
    protected $primaryKey = 'id';
    protected $fillable = ['dps', 'attack_speed', 'damage', 'range', 'health', 'mana', 'armor', 'magic_resistance', 'champion_id', 'level_id'];

    public $timestamps = false;

    public function champion()
    {
        return $this->hasOne(Champion::class, 'id', 'champion_id');
    }

    public function level()
    {
        return $this->hasOne(Level::class, 'id', 'level_id');
    }
}
