<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = ['word', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function getWordAttribute($value)
    {
        return str_shuffle($value);
    }
}
