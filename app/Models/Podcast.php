<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\UserAudioCategory','category_id');
    }
    public function subCategory()
    {
        return $this->belongsTo('App\Models\UserAudioSubCategory','sub_category_id');
    }
    public function tags()
    {
        return $this->hasMany(PodcastTag::class);
    }

}
