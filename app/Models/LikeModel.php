<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeModel extends Model
{
    use HasFactory;
    protected $table= 'all_stories'; 
    protected $primaryKey = 'story_id';
    protected $fillabel=['stry_likes'];
}
