<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $table="customer";
    public $timestamps=false;
    protected $fillable=['name','contact_no'];
}
