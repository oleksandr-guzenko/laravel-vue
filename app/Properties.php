<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = [
        'suburb',
        'state',
        'country'
    ];

    public function propertyAnalytics() {
        return $this->belongsTo('App\PropertyAnalytics');
    }
}
