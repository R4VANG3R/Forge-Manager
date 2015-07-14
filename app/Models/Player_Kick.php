<?php

namespace ForgeManager\Models;

use Illuminate\Database\Eloquent\Model;

class Player_Kick extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['reason'];

    /**
     * Get the player this kick was associated with.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function player()
    {
        return $this->belongsTo('App\Models\Player');
    }
}
