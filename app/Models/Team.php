<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['naam', 'datumopgericht', 'competitie'];


    public function spelers()
    {
        return $this->hasMany(Speler::class, 'teamsid', 'id');
    }
}
