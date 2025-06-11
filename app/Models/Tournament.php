<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Tournament extends Model
{
    protected $fillable = ['name', 'start_date', 'has_group_stage'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
