<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','body','user_id'
    ];
    // protected $guarded = [];
    public function comments(){
        return $this->hasMany(Comment::class,'post_id');
    }
    // // protected static function boot(){
    // //     parent::boot();
    // //     static::saving(function($post){
    // //         $post->slug = Str::slug($post->title);
    // //     });
    // //     static::deleted(function($post){
    // //         $post->comments()->delete();
    // //     });
    // }
    // public function  title() : Attribute{
    //     return Attribute::make(
    //         set:fn($value)=>[
    //             'slug' => Str::slug($value),
    //             'title'=> $value
    //         ],
    //     );
    // }
}
