<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $fillable = ['name', 'phone', 'email'];
}
