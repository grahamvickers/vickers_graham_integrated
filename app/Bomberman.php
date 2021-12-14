<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Bomberman extends Model
{
    /**
     * The fillable columns
     * @var array
     */
    protected $fillable = [
        'name',
        'avatar'
    ];

    /**
     * get avatar uri
     * @return String
     */
    public function getAvatarUriAttribute()
    {
        return Storage::url($this->avatar);
    }
}
