<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $table = "tbl_laptop";
    protected $primaryKey = 'id';
    protected $fillable = ['brand','produk','scree_size','ram','processor','resolution','price','seri_intel','generasi'];
}
