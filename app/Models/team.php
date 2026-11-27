<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
