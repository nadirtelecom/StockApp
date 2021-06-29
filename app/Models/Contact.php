<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes; 
    protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'phone',
    'location',
    'photo',
  	];
  	protected $dates = ['deleted_at'];

  	// Jointure
  	public function categories(){
    return $this->hasOne('App\Models\Category', 'id', 'category_id');
}
}

