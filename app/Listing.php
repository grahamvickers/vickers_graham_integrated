<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    /**
     * 
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'price',
        'profit',
        'income',
        'img',
        'content'
    ];

    /**
     * get listing img uri
     * @return String
     */
    public function getImgUriAttribute()
    {
        return Storage::url($this->img);
    }
}
