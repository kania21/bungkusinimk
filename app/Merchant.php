<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $table ='merchant';
    protected $primaryKey = 'id_merch';
    public $timestamps = false;
    public $incrementing = false;
}
