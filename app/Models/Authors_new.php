<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors_new extends Model
{
    // use HasFactory;
    protected $table = 'author_news';
    protected $fillable = ['author_id','news_id'];
    
    

}
