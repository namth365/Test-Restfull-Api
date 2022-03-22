<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $fillable = ['name', 'xeploai','created_at',
    'updated_at',];
}
