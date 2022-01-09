<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function Transanction(){
        return $this->belongsToMany(Transaction::class);
    }
    public function Categories(){
        return $this->hasOne(Category::class,'id','game_category');
    }
}
