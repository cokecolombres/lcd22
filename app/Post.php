<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;
use App\Tag;
use App\User;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'status',
        'image'
    ];
    
  public function tags()
  {
      return $this->belongsToMany(Tag::class);
  }

  public function category()
  {
      return $this->belongsTo(Category::class);
  }

  public function user()
  {
      return $this->belongsTo(User::class);
  }

  public function checkSaved()
  {
    return \DB::table('post_saved')->where('user_id',auth()->user()->id)->where('post_id',$this->id)->exists();
  }

  public function saves(){
    return $this->belongsToMany(Post::class,'post_saved','post_id','user_id')->withTimeStamps();
 }

}
