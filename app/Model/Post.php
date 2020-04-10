<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{

    use Sluggable;
        
    public $timestamps = true;

    protected $table = 'post';
    protected  $primaryKey = 'id';

    protected $fillable = ['parent', 'subparent', 'title', 'slug', 'description', 'content', 'file', 'others', 'created_at', 'updated_at'];
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'maxLength'   => 50,
                'method'             => null,
                'separator'          => '-',
                'unique'             => true,
                'uniqueSuffix'       => null,
                'includeTrashed'     => false,
                'reserved'           => null,
                'onUpdate'           => false,
                'maxLengthKeepWords' => true,
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
