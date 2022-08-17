<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function author(){
        return $this->belongsTo(User::class);
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
      return $this->created_at->diffForHumans();
    }

    public function scopeLatestFirst(){
      return $this->orderBy('created_at', 'desc');
    }
}
