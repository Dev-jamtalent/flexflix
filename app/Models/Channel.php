<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\UserVideoCategory','category_id');
    }
    public function subCategory()
    {
        return $this->belongsTo('App\Models\UserVideoSubCategory','sub_category_id');
    }
    public function tags()
    {
        return $this->hasMany(ChannelTag::class);
    }
}
