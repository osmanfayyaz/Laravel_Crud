<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    //define array of our database
    protected $fillable  = ['firstname','lasttname','gender','country','city','address'];
    protected $primaryKey = 'id';
}
