<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public $timestamps = false;
    protected $table = "vote_table";
    protected $primaryKey = "id";
    protected $fillable = [
        'yes' , 'no' , 'no_comment'
    ];
}
