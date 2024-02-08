<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backend extends Model
{
    use HasFactory;
    protected $fillable=['name','user_ip','status','number','date','time','message'];
}
