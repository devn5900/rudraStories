<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpModel extends Model
{
    use HasFactory;
    protected $table= 'helpquery';
    protected $fillable= ['name', 'email', 'msg','created_at','updated_at'];

}
