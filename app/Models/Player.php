<?php

namespace ForgeManager\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['uuid', 'username', 'ip_address'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['op'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['last_login'];

    /**
     * Get the kicks associated with the player.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Kicks()
    {
        return $this->hasMany('App\Models\Player_Kick');
    }

    /**
     * Get the bans associated with the player.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Bans()
    {
        return $this->hasMany('App\Models\Player_Ban');
    }

    /**
     * Get the Timeouts associated with the player.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Timeouts()
    {
        return $this->hasMany('App\Models\Player_Timeout');
    }
}
