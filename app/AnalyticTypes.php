<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalyticTypes extends Model
{
    protected $fillable = [
        'name',
        'units',
        'is_numeric',
        'num_decimal_places'
    ];

    public function propertyAnalytics() {
        return $this->belongsTo('App\PropertyAnalytics');
    }
}
