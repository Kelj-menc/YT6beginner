<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //ovo je jedan nacin da napravish fillable polje u db/controlleru
    //protected $fillable = ['name'];
    //ovo dole je drugi nacin da ih napravis fillable all
    protected $guarded = [];
    use HasFactory;
}
