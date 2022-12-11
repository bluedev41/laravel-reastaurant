<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    // protected $primaryKey = 'category_id';

    public function items() {
        return $this->hasMany('App\Item');
    }
}
