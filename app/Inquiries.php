<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiries extends Model
{
    //
    protected $table = 'inquiries';

    protected $fillable = ['fullName', 'inquiry', 'phone'];
}
