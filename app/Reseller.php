<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reseller extends Model
{
        protected $fillable = ['name','phone_number','address','pan_card'];
}
