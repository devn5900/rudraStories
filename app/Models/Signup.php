<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    use HasFactory;
    protected $table= 'usersignupinfo';
    protected $fillable= ['UserName', 'Password', 'Email', 'UserMobile', 'status', 'uidenkk'];
}
 