<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $dates = ['published_at'];

    public function author(){
        return $this->belongsTo(User::class);
    }

    public function category(){
      return $this->belongsTo(Category::class);
    }
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getImageUrlAttribute($value){
      $imageUrl = '';
      if(! is_null($this->img)){
        $imagePath = public_path(). $this->img;

        // if(file_exists($imagePath))
        $imageUrl =  asset($this->img);

      }

      return $imageUrl;
    }

    public function getDateAttribute(){
      return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    public function scopeLatestFirst($query){
      return $query->orderBy('created_at', 'desc');
    }

    public function scopePublished($query){
      return $query->where('published_at', "<=", Carbon::now());
    }
    public function scopePopular($query){
      return $query->orderBy('view_count', 'desc');
    }
}
