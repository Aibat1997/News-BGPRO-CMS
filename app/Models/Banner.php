<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $primaryKey = 'banner_id';
    protected $guarded = [];
    
    public function positions()
    {
        return $this->belongsToMany('App\Models\Position', 'banner_positions', 'bp_banner_id', 'bp_position_id');
    }
}
