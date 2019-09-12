<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChampionClass extends Model
{
    protected $table = 'champions_classes';
    protected $primaryKey = ['champion_id', 'class_id'];
    protected $fillable = ['champion_id', 'class_id'];

    public $timestamps = false;
    public $incrementing = false;

    public function champions()
    {
        return $this->belongsToMany(Champion::class, 'id', 'champion_id');
    }
}
