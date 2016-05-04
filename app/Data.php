<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = "data";
    
    protected $fillable = [ 'meterNumber', 'voucher', 'currentUnits', 'date'];

    protected $dates = [ 'created_at',  'update_at', 'date'];
}
