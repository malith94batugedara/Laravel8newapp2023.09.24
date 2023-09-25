<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
           'category_id',
           'name',
           'slug',
           'description',
           'yt_iframe',
           'meta_title',
           'meta_description',
           'meta_keyword',
           'status',
           'created_by'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
