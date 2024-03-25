<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speler extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['naam', 'teamsid', 'nationaliteit'];

    public function Team()
    {
        return $this->belongsTo(Team::class, 'teamsid', 'id');
    }
}
