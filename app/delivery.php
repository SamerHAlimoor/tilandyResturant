<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    //
    protected $table = 'deliveries';

    protected $fillable = ['fullName', 'nameofmeal', 'phone',
    'amount', 'details', 'address', 'dateofmeal'];
}
