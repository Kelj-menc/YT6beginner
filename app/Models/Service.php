<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //ovo dole je malo probanja da update db - nisam zavrsio
    protected $fillable = ['updated_at'];
    //ovo dole je obrnuto tj protected
    //protected $guarded = ['updated_at'];
    use HasFactory;
}
