<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

     /**
    * Get the user that authored the post.
    */
   public function author()
   {
       return $this->belongsTo('App\User','post_author');
   }

   /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
