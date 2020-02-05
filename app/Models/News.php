<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = true;
    protected $table = "sapa_news";
    protected $primaryKey = "id";
    protected $fillable = ['news_title' , 'news_content'];
}
