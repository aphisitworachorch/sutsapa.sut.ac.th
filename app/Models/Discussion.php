<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    public $incrementing = true;
    protected $primaryKey = "id";
    protected $table = "discussion";
    protected $fillable = [
        'discussion_title' , 'discussion_content'
    ];
}
