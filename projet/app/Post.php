<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Post extends Model
{  protected $table = 'posts';
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
