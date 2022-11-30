<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThoughtsModel extends Model
{
    use HasFactory;
    protected $table = 'thoughts';
    protected $fillabel=['Mainthought','thought_iden'];
}
