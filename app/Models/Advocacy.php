<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advocacy extends Model
{
    public $timestamps = false;
    protected $table = "sapa_advocacy_feedback";
    protected $primaryKey = "feedback_id";
    protected $fillable = ['feedback_title' , 'feedback_content' , 'feedback_type' , 'feedback_contact'];
}
