<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes; 
    protected $fillable = [
    'product_name',
    'product_price',
    'product_qty'
  	];
  	protected $dates = ['deleted_at'];

  	// Jointure
  	public function categories(){
    return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
