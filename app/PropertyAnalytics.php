<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyAnalytics extends Model
{
    protected $fillable = [
        'value'
    ];

    public function properties() {
        return $this->hasMany('App\Properties');
    }

    public function analyticTypes() {
        return $this->hasMany('App\AnalyticTypes');
    }
}
