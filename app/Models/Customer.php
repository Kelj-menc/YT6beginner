<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    //mozesh ovde i ono protected fillable... ali ok je i ovo da nema zasticenih
    use HasFactory;
}
