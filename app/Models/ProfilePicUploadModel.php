<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePicUploadModel extends Model
{
    use HasFactory;
    protected $table="usersignupinfo";
    protected $fillable='images';
}
