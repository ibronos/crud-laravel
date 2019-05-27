<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
	public $table = "crud";
	
    protected $fillable = [
     'first_name', 'last_name', 'image'
    ];
}
