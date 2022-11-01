<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\State;

class City extends Model
{
    use HasFactory;

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    protected $fillable = [
        'state_id',
        'name',
    ];
}
