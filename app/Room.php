<?php

namespace App;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    use HasSlug;

    protected $fillable =['title', 'slug'];


    public function getSlugOptions():SlugOptions

    {

        return SlugOptions::create()
        ->generateSlugsFrom('title')
        ->saveSlugsTo('slug')
        ->allowDuplicateSlugs();

    }
}
